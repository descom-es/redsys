<?php

namespace Descom\Redsys\Tests\Payments;

use Descom\Redsys\Environments\Sandbox;
use Descom\Redsys\Redsys;
use Descom\Redsys\Tests\TestCase;

class RedirectTest extends TestCase
{
    public function testGenerateRedirectRequest()
    {
        $redirect = Redsys::sandbox($this->merchantSandboxParams())
            ->generateRedirectPayment('12345', 1.45, 'https://www.descom.es/payment');

        $formData = $redirect->getFormData();
        $form = $redirect->redirect();

        $this->assertEquals('HMAC_SHA256_V1', $formData['Ds_SignatureVersion']);
        $this->assertEquals('tt/+lwWTRo/HkLHGvG209Eu9Q1jz+XjN6JTTft93wyg=', $formData['Ds_Signature']);
        $this->assertEquals(
            'eyJEU19NRVJDSEFOVF9NRVJDSEFOVENPREUiOiI5OTkwMDg4ODEiLCJEU19NRVJDSEFOVF9URVJNSU5BTCI6IjEiLCJEU19NRVJDSEFOVF9UUkFOU0FDVElPTlRZUEUiOiIwIiwiRFNfTUVSQ0hBTlRfQU1PVU5UIjoiMTQ1IiwiRFNfTUVSQ0hBTlRfQ1VSUkVOQ1kiOiI5NzgiLCJEU19NRVJDSEFOVF9PUkRFUiI6IjEyMzQ1IiwiRFNfTUVSQ0hBTlRfTUVSQ0hBTlRVUkwiOiJodHRwczpcL1wvd3d3LmRlc2NvbS5lc1wvcGF5bWVudCIsIkRTX01FUkNIQU5UX1VSTE9LIjoiaHR0cHM6XC9cL3d3dy5kZXNjb20uZXNcL3BheW1lbnQiLCJEU19NRVJDSEFOVF9VUkxLTyI6Imh0dHBzOlwvXC93d3cuZGVzY29tLmVzXC9wYXltZW50In0=',
            $formData['Ds_MerchantParameters']
        );

        $this->assertStringContainsString((new Sandbox())->getUrlRedirect(), $form);
    }

    public function testGenerateRedirectWithCustomUrl()
    {
        $redirect = Redsys::sandbox($this->merchantSandboxParams())
            ->generateRedirectPayment('12345', 1.45, 'https://www.descom.es/payment');

        $data = $redirect->urlSuccessful('http://localhost:8000/good')
            ->urlDenied('http://localhost:8000/bad')
            ->getData();


        $this->assertEquals('http://localhost:8000/good', $data['DS_MERCHANT_URLOK']);
        $this->assertEquals('http://localhost:8000/bad', $data['DS_MERCHANT_URLKO']);
    }
}
