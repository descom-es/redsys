<?php

namespace Descom\Redsys\Payments\InSite;

use Closure;
use Descom\Redsys\Environments\Environment;
use Descom\Redsys\Events\Events;
use Descom\Redsys\Events\FailedPayment;
use Descom\Redsys\Events\PaidCompletedSuccessfully;
use Descom\Redsys\Merchants\Merchant;
use Descom\Redsys\Payments\Request;
use Descom\Redsys\Payments\Response as PaymentResponse;
use Descom\Redsys\Response;
use Http\Discovery\Psr18Client;
use Illuminate\Http\Request as HttpRequest;

final class Emv3DsAuthProcessRequest extends Request
{
    use PaymentResponse;

    private string $cardToken;
    private array $screen;
    private array $em3dSecure;
    private string $urlNotification;
    private ?HttpRequest $request;

    public function __construct(
        protected Environment $environment,
        protected Merchant $merchant,
        protected int|string $orderId,
        protected float|int $amount
    ) {
        $this->currency = $this->merchant->currency;
    }

    public function process(string $cardToken, string $urlNotification, array $screen, array $em3dSecure, ?HttpRequest $request = null, ?Closure $event = null): Response
    {
        $this->cardToken = $cardToken;
        $this->screen = $screen;
        $this->em3dSecure = $em3dSecure;
        $this->urlNotification = $urlNotification;
        $this->request = $request;

        $http = new Psr18Client();

        $request = $http->createRequest('POST', $this->environment->getUrlRest())
            ->withHeader('Content-Type', 'application/json')
            ->withBody($http->createStream(json_encode($this->getDataSigned())));

        $response = $http->sendRequest($request);

        $jsonResponse = json_decode($response->getBody()->getContents(), true);

        if ($event) {
            $event('process response', $jsonResponse);
        }

        $response = $this->getResponseWithoutValidate($this->merchant, $jsonResponse);

        if ($this->challengerRequired($response)) {
            if ($event) {
                $event('challenger required', $jsonResponse);
            }

            return $response;
        }

        $response = $this->getValidResponse($this->merchant, $jsonResponse);

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
                    'threeDSInfo' => 'AuthenticationData',
                    'protocolVersion' => $this->em3dSecure['version'],
                    'browserAcceptHeader' => $this->getHeader('Accept', ''),
                    'browserUserAgent' => $this->getHeader('User-Agent', ''),
                    'browserJavaEnabled' => 'false',
                    'browserJavascriptEnabled' => 'false',
                    'browserLanguage' => $this->getHeader('Accept-Language', ''),
                    'browserColorDepth' => (string)$this->screen['colorDepth'],
                    'browserScreenHeight' => (string)$this->screen['height'],
                    'browserScreenWidth' => (string)$this->screen['width'],
                    'browserTZ' => $this->getHeader('Timezone', 52),
                    'threeDSServerTransID' => $this->em3dSecure['transId'],
                    'notificationURL' => $this->urlNotification,
                    'threeDSCompInd' => $this->em3dSecure['url'] ? 'Y' : 'N',
                ],
            ],
        );
    }

    private function getHeader(string $name, $default): ?string
    {
        if (is_null($this->request)) {
            return null;
        }

        return $this->request->header($name, $default);
    }

    private function challengerRequired(Response $response): bool
    {
        $threeDSInfo = $response->emv3ds['threeDSInfo'] ?? null;

        return $threeDSInfo === 'ChallengeRequest';
    }
}
