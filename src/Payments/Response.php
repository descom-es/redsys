<?php

namespace Descom\Redsys\Payments;

use Descom\Redsys\Exceptions\RequestFailed;
use Descom\Redsys\Exceptions\SignatureInvalid;
use Descom\Redsys\Merchants\Merchant;
use Descom\Redsys\Parameters;
use Descom\Redsys\Response as RedsysResponse;
use Descom\Redsys\Signature;

trait Response
{
    protected function getValidResponse(Merchant $merchant, array $request): RedsysResponse
    {
        $this->validateSignature($merchant, $request);

        return $this->getResponseWithoutValidate($merchant, $request);
    }

    protected function getResponseWithoutValidate(Merchant $merchant, array $request): RedsysResponse
    {
        $parameters = $this->getParameters($request);

        return new RedsysResponse($merchant, $parameters);
    }

    private function getParameters(array $request): Parameters
    {
        if (! empty($request['errorCode'])) {
            throw new RequestFailed($request['errorCode']);
        }

        $parameters = new Parameters($request);

        $merchantParameters = json_decode(base64_decode($parameters->dsMerchantParameters), true);

        if (! is_array($merchantParameters)) {
            throw new RequestFailed('Not valid merchant parameters');
        }

        return new Parameters($merchantParameters);
    }

    private function validateSignature(Merchant $merchant, array $data): void
    {
        $parametersSigned = new Parameters($data);

        $signature = $parametersSigned->dsSignature;
        $parameters = json_decode(base64_decode($parametersSigned->dsMerchantParameters), true);

        $signatureCalculated = Signature::generateSignature($merchant->signatureKey, $parameters);

        if ($signature !== $signatureCalculated) {
            throw new SignatureInvalid();
        }
    }
}
