<?php

namespace Descom\Redsys\Payments;

use Descom\Redsys\Environments\Environment;
use Descom\Redsys\Merchants\Merchant;
use Descom\Redsys\Signature;

final class RedirectRequest
{
    private int $currency;
    private string $urlSuccessful;
    private string $urlDenied;

    public function __construct(
        private Environment $environment,
        private Merchant $merchant,
        private string $order,
        private float|int $amount,
        private string $urlNotify
    ) {
        $this->currency = $this->merchant->currency;
        $this->urlSuccessful = $this->urlNotify;
        $this->urlDenied = $this->urlNotify;
    }

    /**
     * Url donde notificar al cliente si el pago ha sido efectuado satisfactoriamente
     */
    public function urlSuccessful(string $url): self
    {
        $this->urlSuccessful = $url;

        return $this;
    }

    /**
     * Url donde notificar al cliente si el pago se ha denegado/cancelado
     */
    public function urlDenied(string $url): self
    {
        $this->urlDenied = $url;

        return $this;
    }

    /**
     * Obtiene el código HTML para redireccionar a la pasarela de pago
     */
    public function getHtml(string $title = 'Redirigiendo a la pasarela de pago ...'): string
    {
        $urlRedirect = $this->environment->getUrlRedirect();
        $formData = $this->getFormData();

        $formSkeleton = <<<FORM
        <!DOCTYPE html>
        <html>
            <head>
                <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
                <title>%s</title>
                <style>
                    body {
                        min-height: 100vh;
                        display: grid;
                        place-items: center;
                    }
                </style>
            </head>
            <body onload="document.frmRedsysRedirect.submit();">
                <form action="%s" method="POST" name="frmRedsysRedirect">
                    <input type="hidden" name="Ds_SignatureVersion" value="%s"/>
                    <input type="hidden" name="Ds_MerchantParameters" value="%s"/>
                    <input type="hidden" name="Ds_Signature" value="%s"/>
                    <button type="submit">%s</button>
                </form>
            </body>
        </html>
        FORM;

        return sprintf(
            $formSkeleton,
            $title,
            $urlRedirect,
            $formData['Ds_SignatureVersion'],
            $formData['Ds_MerchantParameters'],
            $formData['Ds_Signature'],
            $title
        );
    }

    /**
     * Obtiene los parámetros a pasar por POST en el formulario de redirección
     */
    public function getFormData(): array
    {
        return [
            'Ds_SignatureVersion' => 'HMAC_SHA256_V1',
            'Ds_Signature' => Signature::generateSignature($this->merchant->signatureKey, $this->getData()),
            'Ds_MerchantParameters' => $this->getDataEncoded(),
        ];
    }

    public function getData(): array
    {
        return array_map(
            fn ($c) => (string)$c,
            [
            'DS_MERCHANT_MERCHANTCODE' => $this->merchant->code,
            'DS_MERCHANT_TERMINAL' => $this->merchant->terminal,
            'DS_MERCHANT_TRANSACTIONTYPE' => 0,
            'DS_MERCHANT_AMOUNT' => $this->transformAmount($this->amount),
            'DS_MERCHANT_CURRENCY' => $this->currency,
            'DS_MERCHANT_ORDER' => $this->order,
            'DS_MERCHANT_MERCHANTURL' => $this->urlNotify,
            'DS_MERCHANT_URLOK' => $this->urlSuccessful,
            'DS_MERCHANT_URLKO' => $this->urlDenied,
            ]
        );
    }

    private function getDataEncoded(): string
    {
        return base64_encode(json_encode($this->getData()));
    }

    private function transformAmount(float|int $amount): int
    {
        return (int)round($amount * 100);
    }
}
