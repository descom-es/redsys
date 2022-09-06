<?php

namespace Descom\Redsys\Merchants;

final class MerchantBuilder
{
    public static function testing(): Merchant
    {
        return Merchant::fromArray([
            'code' => 999008881,
            'terminal' => 1,
            'signatureKey' => 'sq7HjrUOBfKmC576ILgskD5srU870gJ7',
        ]);
    }
}
