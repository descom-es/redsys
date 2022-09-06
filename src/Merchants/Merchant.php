<?php

namespace Descom\Redsys\Merchants;

/**
 * @property string $signatureKey  Ds_Signature, La firma de la operación"
 * @property int|string $code  DS_MERCHANT_MERCHANTCODE, Identificación de comercio: código FUC
 * @property int|string $terminal  DS_MERCHANT_TERMINAL, Número de terminal
 * @property int|string $currency
 */
final class Merchant
{
    private int $currency = 978;

    /**
     * @param int|string $code  DS_MERCHANT_MERCHANTCODE, Identificación de comercio: código FUC
     * @param int|string $terminal  DS_MERCHANT_TERMINAL, Número de terminal
     * @param string $signatureKey  Ds_Signature, La firma de la operación"
     */
    public function __construct(
        private int|string $code,
        private int|string $terminal,
        private string $signatureKey
    ) {
    }

    public static function fromArray(array $params): self
    {
        return new self(
            $params['code'] ?? '',
            $params['terminal'] ?? 1,
            $params['signatureKey'] ?? '',
        );
    }

    public function __get($name)
    {
        return $this->$name;
    }
}
