<?php

namespace Descom\Redsys;

use Descom\Redsys\Environments\Environment;
use Descom\Redsys\Environments\Production;
use Descom\Redsys\Environments\Sandbox;
use Descom\Redsys\Merchants\Merchant;
use Descom\Redsys\Payments\RedirectNotification;
use Descom\Redsys\Payments\RedirectRequest;

final class Redsys
{
    private function __construct(private Environment $environment, private Merchant $merchant)
    {
    }

    public static function sandbox(array $params): self
    {
        return new self(new Sandbox(), self::createMerchantFromArray($params));
    }

    public static function production(array $params): self
    {
        return new self(new Production(), self::createMerchantFromArray($params));
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

    private static function createMerchantFromArray(array $params): Merchant
    {
        return Merchant::fromArray([
            'code' => $params['code'] ?? '',
            'terminal' => $params['terminal'] ?? 1,
            'signatureKey' => $params['signatureKey'] ?? '',
        ]);
    }
}
