<?php

namespace Descom\Redsys;

use Descom\Redsys\Merchants\Merchant;

/**
 * @property int|string $orderId  Número de pedido
 * @property float $amount  Importe
 * @property string $authorizationCode  Código de autorización
 * @property ?string $errorCode  Código de error
 * @property ?string $responseCode  Valor que indica el resultado de la operación. Indicará si ha sido autorizada o no. Ver tabla Ds_Response
 */
final class Response
{
    public function __construct(private Merchant $merchant, private Parameters $parameters)
    {
    }

    public function successful(): bool
    {
        return $this->authorizedTransition()
            && $this->validMerchantCode()
            && $this->validMerchantTerminal();
    }

    public function __get($name)
    {
        $methodName = "getAttribute" . ucfirst($name);

        if (method_exists(self::class, $methodName)) {
            return $this->$methodName();
        }

        return null;
    }

    /**
     * Si el pago es seguro
     */
    public function secure(): bool
    {
        return (int)$this->parameters->dsSecurePayment === 1;
    }

    private function getAttributeOrderId(): string
    {
        return $this->parameters->dsOrder;
    }

    private function getAttributeAmount(): float
    {
        $amountInCts = (int)$this->parameters->dsAmount;

        return $amountInCts / 100;
    }

    private function getAttributeAuthorizationCode(): string
    {
        return $this->parameters->dsAuthorisationCode;
    }

    private function getAttributeErrorCode(): ?string
    {
        return $this->authorizedTransition()
            ? null
            : $this->parameters->dsErrorCode ?? null;
    }

    private function getAttributeResponseCode(): string
    {
        return $this->parameters->dsResponse;
    }

    public function toArray(): array
    {
        return $this->parameters->toArray();
    }

    private function authorizedTransition(): bool
    {
        $dsResponse = (int)$this->parameters->dsResponse;

        return $dsResponse <= 99;
    }

    private function validMerchantCode(): bool
    {
        return (string)$this->merchant->code === $this->parameters->dsMerchantCode;
    }

    private function validMerchantTerminal(): bool
    {
        return (int)$this->merchant->terminal === (int)$this->parameters->dsTerminal;
    }
}
