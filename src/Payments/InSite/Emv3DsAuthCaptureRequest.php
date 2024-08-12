<?php

namespace Descom\Redsys\Payments\InSite;

use Descom\Redsys\Environments\Environment;
use Descom\Redsys\Events\Events;
use Descom\Redsys\Events\FailedPayment;
use Descom\Redsys\Events\PaidCompletedSuccessfully;
use Descom\Redsys\Merchants\Merchant;
use Descom\Redsys\Payments\Response as PaymentResponse;
use Descom\Redsys\Payments\Request;
use Descom\Redsys\Response;
use Http\Discovery\Psr18Client;

final class Emv3DsAuthCaptureRequest extends Request
{
    use PaymentResponse;

    private string $cardToken;
    private string $version;
    private string $cres;

    public function __construct(
        protected Environment $environment,
        protected Merchant $merchant,
        protected int|string $orderId,
        protected float|int $amount
    ) {
        $this->currency = $this->merchant->currency;
    }

    public function process(string $cardToken, string $version, string $cres): Response
    {
        $this->cardToken = $cardToken;
        $this->version = $version;
        $this->cres = $cres;

        $http = new Psr18Client();

        $request = $http->createRequest('POST', $this->environment->getUrlRest())
            ->withHeader('Content-Type', 'application/json')
            ->withBody($http->createStream(json_encode($this->getDataSigned())));

        $response = $http->sendRequest($request);

        $response = $this->getValidResponse($this->merchant, json_decode($response->getBody()->getContents(), true));

        if ($response->successful()) {
            Events::dispatch(new PaidCompletedSuccessfully($response));
        } else {
            Events::dispatch(new FailedPayment($response));
        }

        return $response;
    }

    public function getData(): array
    {
        return array_merge(
            parent::getData(),
            [
                'DS_MERCHANT_IDOPER' => $this->cardToken,
                'DS_MERCHANT_EMV3DS' => [
                    'threeDSInfo' => 'ChallengeResponse',
                    'protocolVersion' => $this->version,
                    'cres' => $this->cres,
                ]
            ],
        );
    }
}
