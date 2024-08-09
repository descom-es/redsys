<?php

namespace Descom\Redsys\Payments;

use Descom\Redsys\Environments\Environment;
use Descom\Redsys\Merchants\Merchant;

final class RedirectRequest extends Request
{
    private string $urlSuccessful;
    private string $urlDenied;

    public function __construct(
        protected Environment $environment,
        protected Merchant $merchant,
        protected int|string $orderId,
        protected float|int $amount,
        private string $urlNotify
    ) {
        parent::__construct($environment, $merchant, $orderId, $amount);

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
     * Url de laa pasarela de pago doonde redireccionar
     */
    public function getUrlRedirect(): string
    {
        return $this->environment->getUrlRedirect();
    }

    /**
     * Obtiene el código HTML para redireccionar a la pasarela de pago
     */
    public function redirect(string $title = 'Redirigiendo a la pasarela de pago ...'): string
    {
        $urlRedirect = $this->getUrlRedirect();
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
        return $this->getDataSigned();
    }

    public function getData(): array
    {
        return array_merge(
            parent::getData(), [
                'DS_MERCHANT_MERCHANTURL' => $this->urlNotify,
                'DS_MERCHANT_URLOK' => $this->urlSuccessful,
                'DS_MERCHANT_URLKO' => $this->urlDenied,
            ]);
    }
}
