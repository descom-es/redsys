<?php

namespace Descom\Redsys\Payments\Redirect;

use Descom\Redsys\Merchants\Merchant;
use Descom\Redsys\Payments\Response;
use Descom\Redsys\Response as RedsysResponse;

final class RedirectNotification
{
    use Response;

    public function __construct(private Merchant $merchant)
    {
    }

    public function notification(array $request): RedsysResponse
    {
        return $this->getValidResponse($this->merchant, $request);
    }
}
