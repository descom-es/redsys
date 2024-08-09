<?php

namespace Descom\Redsys\Payments\Redirect;

use Descom\Redsys\Environments\Environment;
use Descom\Redsys\Merchants\Merchant;

final class Redirect
{
    private function __construct(private Environment $environment, private Merchant $merchant)
    {
    }

    public function generateRedirectPayment(int|string $orderId, int|float $amount, string $urlNotification): RedirectRequest
    {
        return new RedirectRequest($this->environment, $this->merchant, $orderId, $amount, $urlNotification);
    }

    public function capturePaymentNotification(array $parameters)
    {
        $notificationResponse = new RedirectNotification($this->merchant);

        return $notificationResponse->notification($parameters);
    }

}
