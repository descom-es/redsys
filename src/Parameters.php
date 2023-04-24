<?php

namespace Descom\Redsys;

use Descom\Redsys\Exceptions\ParamsNotFound;

/**
 * @property string $dsSignature
 * @property string $dsMerchantParameters
 * @property string $order
 * @property string $dsOrder
 * @property string $dsResponse
 * @property string $dsMerchantCode
 * @property string $dsSecurePayment
 * @property string $dsAmount
 * @property string $dsAuthorisationCode
 * @property string $dsMerchantCode
 * @property string $dsTerminal
 * @property ?string $dsMerchantData
 * @property ?string $dsErrorCode
 */
final class Parameters
{
    public function __construct(private array $parameters)
    {
    }

    public function __get(string $name): mixed
    {
        $methodName = "getParameter".ucfirst($name);

        if (method_exists($this, $methodName)) {
            return $this->$methodName();
        }

        return $this->getParameter($name);
    }

    public function toArray(): array
    {
        return $this->parameters;
    }

    public function __toString()
    {
        return json_encode($this->parameters);
    }

    private function getParameterOrder(): string
    {
        try {
            return $this->getParameter('ds_order');
        } catch (ParamsNotFound $exception) {
        }

        return $this->getParameter('ds_merchant_order');
    }

    /**
     * @throws \Descom\Redsys\Exceptions\ParamsNotFound
     */
    private function getParameter(string $key): string
    {
        foreach ($this->parameters as $parameterKey => $parameterValue) {
            if ($this->sameParameter($key, $parameterKey)) {
                return $parameterValue;
            }
        }

        throw new ParamsNotFound($key);
    }

    private function sameParameter(string $key, string $parameterKey)
    {
        return strtolower($parameterKey) === strtolower($key)
            || strtolower($this->camelCase($parameterKey)) === strtolower($key);
    }

    private function camelCase(string $string): string
    {
        $parts = explode('_', $string);

        $result = array_reduce(
            $parts,
            fn ($a, $v) => $a .= ucfirst($v),
            ''
        );

        return lcfirst($result);
    }
}
