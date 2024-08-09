<?php

namespace Descom\Redsys\Payments;

use Descom\Redsys\Environments\Environment;
use Descom\Redsys\Merchants\Merchant;
use Descom\Redsys\Signature;

abstract class Request
{
    protected int $currency;
    protected ?string $merchantName = null;
    protected ?string $merchantPayMethods = null;
    protected ?string $description = null;
    protected ?string $data = null;

    public function __construct(
        protected Environment $environment,
        protected Merchant $merchant,
        protected int|string $orderId,
        protected float|int $amount
    ) {
        $this->currency = $this->merchant->currency;
    }

    /**
     * Para la entrada de realizar pago esta información se mostrará al titular
     * en la pantallas con las que este interaciona.
     */
    public function description(string $description): static
    {
        $this->description = $this->strTruncate($description, 125);

        return $this;
    }

    /**
     * Cadena de datos que no procesará el TPV-Virtual y se devolverán de la
     * misma forma en la respuesta
     */
    public function data(string $data): static
    {
        $this->data = $this->strTruncate($data, 1024);

        return $this;
    }

    /**
     * Para la entrada de realizar pago esta información se mostrará al titular
     * en la pantallas con las que este interaciona. En caso de no informarse
     * aparecerá el nombre configurado en la administración del TPV- Virtual.
     */
    public function merchantName(string $name): static
    {
        $this->merchantName = $this->strTruncate($name, 25);

        return $this;
    }

    /**
     * Método de pago; z = Bizum; p = paypal, R = Transferencia, N = Masterpass; C = con tarjeta
     */
    public function merchantPaymethods(string $method): static
    {
        $this->merchantPayMethods = $this->strTruncate($method, 1);

        return $this;
    }

    public function getDataSigned(): array
    {
        return [
            'Ds_SignatureVersion' => 'HMAC_SHA256_V1',
            'Ds_Signature' => Signature::generateSignature($this->merchant->signatureKey, $this->getData()),
            'Ds_MerchantParameters' => $this->getDataEncoded(),
        ];
    }

    public function getData(): array
    {
        $data = [
            'DS_MERCHANT_MERCHANTCODE' => $this->merchant->code,
            'DS_MERCHANT_TERMINAL' => $this->merchant->terminal,
            'DS_MERCHANT_TRANSACTIONTYPE' => 0,
            'DS_MERCHANT_AMOUNT' => $this->transformAmount($this->amount),
            'DS_MERCHANT_CURRENCY' => $this->currency,
            'DS_MERCHANT_ORDER' => $this->orderId,
        ];


        $this->addDataIfNotEmpty($data, 'DS_MERCHANT_MERCHANTNAME', $this->merchantName);
        $this->addDataIfNotEmpty($data, 'DS_MERCHANT_PRODUCTDESCRIPTION', $this->description);
        $this->addDataIfNotEmpty($data, 'DS_MERCHANT_MERCHANTDATA', $this->data);
        $this->addDataIfNotEmpty($data, 'DS_MERCHANT_PAYMETHODS', $this->merchantPayMethods);

        return $this->stringifyArray($data);
    }

    protected function strTruncate(string $string, int $length, string $marker = '...'): string
    {
        return mb_strimwidth($string, 0, $length, $marker);
    }

    protected function getDataEncoded(): string
    {
        return base64_encode(json_encode($this->getData()));
    }

    protected function transformAmount(float|int $amount): int
    {
        return (int)round($amount * 100);
    }

    protected function stringifyArray(array $data): array
    {
        return array_map(fn ($e) => (string)$e, $data);
    }

    protected function addDataIfNotEmpty(array &$array, string $key, $value)
    {
        if ($value) {
            $array[$key] = $value;
        }
    }
}
