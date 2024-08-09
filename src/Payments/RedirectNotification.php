<?php

namespace Descom\Redsys\Payments;

use Descom\Redsys\Merchants\Merchant;
use Descom\Redsys\Response;

final class RedirectNotification
{
    use RedisResponse;

    public function __construct(private Merchant $merchant)
    {
    }

    public function notification(array $request): Response
    {
        return $this->getValidResponse($this->merchant, $request);
    }
}
