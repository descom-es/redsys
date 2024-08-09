<?php

namespace Descom\Redsys\Payments\InSite;

use Descom\Redsys\Environments\Environment;
use Descom\Redsys\Merchants\Merchant;
use Descom\Redsys\Payments\InSite\Emv3DsAuthCaptureRequest;
use Descom\Redsys\Payments\InSite\Emv3DsAuthCardRequest;
use Descom\Redsys\Payments\InSite\Emv3DsAuthProcessRequest;
use Descom\Redsys\Response;

final class InSite
{
    private function __construct(private Environment $environment, private Merchant $merchant)
    {
    }

    public function cardConfiguration(int|string $orderId, int|float $amount, string $cardToken, string $urlNotification): array
    {
        return (new Emv3DsAuthCardRequest($this->environment, $this->merchant, $orderId, $amount))
            ->configuration($cardToken, $urlNotification);
    }

    public function process(int|string $orderId, int|float $amount, string $cardToken, string $urlNotification, array $screen, array $em3dSecure): Response
    {
        return (new Emv3DsAuthProcessRequest($this->environment, $this->merchant, $orderId, $amount))
            ->process($cardToken, $urlNotification, $screen, $em3dSecure);
    }

    public function capture(int|string $orderId, int|float $amount, string $cardToken, string $version, string $cres): Response
    {
        return (new Emv3DsAuthCaptureRequest($this->environment, $this->merchant, $orderId, $amount))
            ->process($cardToken, $version, $cres);
    }
}
