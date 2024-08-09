<?php

namespace Descom\Redsys;

use Descom\Redsys\Environments\Environment;
use Descom\Redsys\Environments\Production;
use Descom\Redsys\Environments\Sandbox;
use Descom\Redsys\Merchants\Merchant;
use Descom\Redsys\Payments\InSite\InSite;
use Descom\Redsys\Payments\Redirect\Redirect;
use Descom\Redsys\Payments\Redirect\RedirectNotification;
use Descom\Redsys\Payments\Redirect\RedirectRequest;

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

    public function redirect(): Redirect
    {
        return new Redirect($this->environment, $this->merchant);
    }

    public function inSite(): InSite
    {
        return new InSite($this->environment, $this->merchant);
    }

    /**
     * @deprecated version 2.0.0
     */
    public function generateRedirectPayment(int|string $orderId, int|float $amount, string $urlNotification): RedirectRequest
    {
        return new RedirectRequest($this->environment, $this->merchant, $orderId, $amount, $urlNotification);
    }

    /**
     * @deprecated version 2.0.0
     */
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
