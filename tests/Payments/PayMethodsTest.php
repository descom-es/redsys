<?php

namespace Descom\Redsys\Tests\Payments;

use Descom\Redsys\Payments\RedirectRequest;
use Descom\Redsys\Redsys;
use Descom\Redsys\Tests\TestCase;

class PayMethodsTest extends TestCase
{
    public function testCardDefault()
    {
        $redirect = Redsys::sandbox($this->merchantSandboxParams())
            ->generateRedirectPayment('12345', 1.45, 'https://www.descom.es/payment');

        $parameters = $this->getMerchantParameters($redirect);

        $payMethods = $parameters->DS_MERCHANT_PAYMETHODS ?? 'C';

        $this->assertEquals('C', $payMethods);
    }

    public function testBizum()
    {
        $redirect = Redsys::sandbox($this->merchantSandboxParams())
            ->generateRedirectPayment('12345', 1.45, 'https://www.descom.es/payment')
            ->merchantPaymethods('z');

        $parameters = $this->getMerchantParameters($redirect);

        $payMethods = $parameters->DS_MERCHANT_PAYMETHODS;

        $this->assertEquals('z', $payMethods);
    }

    private function getMerchantParameters(RedirectRequest $redirect)
    {
        return json_decode(base64_decode($redirect->getFormData()['Ds_MerchantParameters']));
    }
}
