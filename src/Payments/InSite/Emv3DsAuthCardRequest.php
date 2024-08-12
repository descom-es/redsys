<?php

namespace Descom\Redsys\Payments\InSite;

use Descom\Redsys\Environments\Environment;
use Descom\Redsys\Merchants\Merchant;
use Descom\Redsys\Payments\Request;
use Descom\Redsys\Payments\Response as PaymentResponse;
use Http\Discovery\Psr18Client;

final class Emv3DsAuthCardRequest extends Request
{
    use PaymentResponse;

    private string $cardToken;
    // private string $urlNotification;

    public function __construct(
        protected Environment $environment,
        protected Merchant $merchant,
        protected int|string $orderId,
        protected float|int $amount
    ) {
        $this->currency = $this->merchant->currency;
    }

    public function configuration(string $cardToken, string $urlNotification): array
    {
        $this->cardToken = $cardToken;
        // $this->urlNotification = $urlNotification;

        $http = new Psr18Client();

        $request = $http->createRequest('POST', $this->environment->getUrlRestAuthorize())
            ->withHeader('Content-Type', 'application/json')
            ->withBody($http->createStream(json_encode($this->getDataSigned())));

        $response = $http->sendRequest($request);

        $jsonResponse = json_decode($response->getBody()->getContents(), true);

        $response = $this->getResponseWithoutValidate(
            $this->merchant,
            $jsonResponse
        )->toArray();

        $url = $response['Ds_EMV3DS']['threeDSMethodURL'] ?? null;

        $em3dSecure = [
            'version' => $response['Ds_EMV3DS']['protocolVersion'],
            'transId' => $response['Ds_EMV3DS']['threeDSServerTransID'],
            'url' => $url,
        ];

        $data = [
            'em3dSecure' => $em3dSecure,
        ];

        if ($url) {
            $data['iframe'] = [
                'src' => $this->get3DSecureIframe($em3dSecure, $urlNotification),
            ];
        }

        return $data;
    }

    public function getData(): array
    {
        return array_merge(
            parent::getData(),
            [
                'DS_MERCHANT_IDOPER' => $this->cardToken,
                'DS_MERCHANT_EMV3DS' => [
                    'threeDSInfo' => 'CardData',
                ],
            ],
        );
    }

    private function get3DSecureIframe(array $em3dSecure, string $urlNotification): string
    {
        $formData = base64_encode(json_encode([
            'threeDSServerTransID' => $em3dSecure['transId'],
            'threeDSMethodNotificationURL' => $urlNotification,
        ]));

        return "<iframe src='{$em3dSecure['url']}?threeDSMethodData={$formData}'></iframe>";
    }
}
