<?php

namespace Descom\Redsys\Payments;

use Descom\Redsys\Exceptions\SignatureInvalid;
use Descom\Redsys\Merchants\Merchant;
use Descom\Redsys\Parameters;
use Descom\Redsys\Response;
use Descom\Redsys\Signature;

final class RedirectNotification
{
    public function __construct(private Merchant $merchant)
    {
    }

    public function notification(array $request): Response
    {
        $this->validateSignature($request);

        $parameters = $this->getParameters($request);

        return new Response($this->merchant, $parameters);
    }

    private function validateSignature(array $data): void
    {
        $parametersSigned = new Parameters($data);

        $signature = $parametersSigned->dsSignature;
        $parameters = json_decode(base64_decode($parametersSigned->dsMerchantParameters), true);

        $signatureCalculated = Signature::generateSignature($this->merchant->signatureKey, $parameters);

        if ($signature !== $signatureCalculated) {
            throw new SignatureInvalid();
        }
    }

    private function getParameters(array $request): Parameters
    {
        $parameters = new Parameters($request);

        return new Parameters(json_decode(base64_decode($parameters->dsMerchantParameters), true));
    }
}
