<?php

namespace Descom\Redsys;

use Descom\Redsys\Exceptions\ParamsNotFound;

final class Signature
{
    public static function generateSignature(string $key, array $parameters): string
    {
        $self = new self();

        $parameters = new Parameters($parameters);

        $key = base64_decode($key);
        $order = $parameters->order;
        $parametersEncoded = base64_encode($parameters);

        $key = $self->encrypt3DES($order, $key);
        $result = $self->hmac256($parametersEncoded, $key);

        if ($self->isNotification($parameters)) {
            return strtr(base64_encode($result), '+/', '-_');
        }

        return base64_encode($result);
    }

    private function isNotification(Parameters $parameters): bool
    {
        try {
            $orderNotified = $parameters->dsOrder;
        } catch (ParamsNotFound $exception) {
            $orderNotified = null;
        }

        return ! empty($orderNotified);
    }

    private function encrypt3DES(string $data, string $key): string
    {
        $iv = "\0\0\0\0\0\0\0\0";

        $dataPadded = $this->strPadMultiply($data, 8, "\0");

        return openssl_encrypt($dataPadded, "DES-EDE3-CBC", $key, OPENSSL_RAW_DATA | OPENSSL_NO_PADDING, $iv);
    }

    private function hmac256(string $data, string $key): string
    {
        return hash_hmac('sha256', $data, $key, true);
    }

    private function strPadMultiply(string $string, int $multiply, string $padString): string
    {
        $needPadding = strlen($string) % $multiply;

        if ($needPadding === 0) {
            return $string;
        }

        $toPadding = strlen($string) + $multiply - $needPadding % $multiply;

        return str_pad($string, $toPadding, $padString);
    }
}
