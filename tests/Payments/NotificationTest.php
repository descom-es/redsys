<?php

namespace Descom\Redsys\Tests\Payments;

use Descom\Redsys\Exceptions\SignatureInvalid;
use Descom\Redsys\Redsys;
use Descom\Redsys\Tests\TestCase;

class NotificationTest extends TestCase
{
    public function testNotificationInvalidsignature()
    {
        $this->expectException(SignatureInvalid::class);

        $data = [
            'Ds_SignatureVersion' => 'HMAC_SHA256_V1',
            'Ds_MerchantParameters' => 'eyJEc19EYXRlIjoiMDUlMkYwOSUyRjIwMjIiLCJEc19Ib3VyIjoiMTUlM0ExMSIsIkRzX1NlY3VyZVBheW1lbnQiOiIxIiwiRHNfQ2FyZF9OdW1iZXIiOiI0NTQ4ODEqKioqKiowMDAzIiwiRHNfQ2FyZF9Db3VudHJ5IjoiNzI0IiwiRHNfQW1vdW50IjoiMTQ1IiwiRHNfQ3VycmVuY3kiOiI5NzgiLCJEc19PcmRlciI6IjEyMzQ2IiwiRHNfTWVyY2hhbnRDb2RlIjoiOTk5MDA4ODgxIiwiRHNfVGVybWluYWwiOiIwMDEiLCJEc19SZXNwb25zZSI6IjAwMDAiLCJEc19NZXJjaGFudERhdGEiOiIiLCJEc19UcmFuc2FjdGlvblR5cGUiOiIwIiwiRHNfQ29uc3VtZXJMYW5ndWFnZSI6IjEiLCJEc19BdXRob3Jpc2F0aW9uQ29kZSI6IjAxMzU0OCIsIkRzX0NhcmRfQnJhbmQiOiIxIiwiRHNfUHJvY2Vzc2VkUGF5TWV0aG9kIjoiMSIsIkRzX0NvbnRyb2xfMTY2MjM4MzQ2Nzc4MyI6IjE2NjIzODM0Njc3ODMifQ==',
            'Ds_Signature' => 'badDtTMmr_rkXYGRvQiv3cQI2cYKoi-eLmwEsIQtPGGogg=',
        ];

        $redsys = Redsys::sandbox($this->merchantSandboxParams());

        $redsys->capturePaymentNotification($data);
    }

    public function testNotificationIsSucessful()
    {
        $data = [
            'Ds_SignatureVersion' => 'HMAC_SHA256_V1',
            'Ds_MerchantParameters' => 'eyJEc19EYXRlIjoiMDUlMkYwOSUyRjIwMjIiLCJEc19Ib3VyIjoiMTUlM0ExMSIsIkRzX1NlY3VyZVBheW1lbnQiOiIxIiwiRHNfQ2FyZF9OdW1iZXIiOiI0NTQ4ODEqKioqKiowMDAzIiwiRHNfQ2FyZF9Db3VudHJ5IjoiNzI0IiwiRHNfQW1vdW50IjoiMTQ1IiwiRHNfQ3VycmVuY3kiOiI5NzgiLCJEc19PcmRlciI6IjEyMzQ2IiwiRHNfTWVyY2hhbnRDb2RlIjoiOTk5MDA4ODgxIiwiRHNfVGVybWluYWwiOiIwMDEiLCJEc19SZXNwb25zZSI6IjAwMDAiLCJEc19NZXJjaGFudERhdGEiOiIiLCJEc19UcmFuc2FjdGlvblR5cGUiOiIwIiwiRHNfQ29uc3VtZXJMYW5ndWFnZSI6IjEiLCJEc19BdXRob3Jpc2F0aW9uQ29kZSI6IjAxMzU0OCIsIkRzX0NhcmRfQnJhbmQiOiIxIiwiRHNfUHJvY2Vzc2VkUGF5TWV0aG9kIjoiMSIsIkRzX0NvbnRyb2xfMTY2MjM4MzQ2Nzc4MyI6IjE2NjIzODM0Njc3ODMifQ==',
            'Ds_Signature' => 'DtTMmr_rkXYGRvQiv3cQI2cYKoi-eLmwEsIQtPGGogg=',
        ];

        $redsys = Redsys::sandbox($this->merchantSandboxParams());

        $response = $redsys->capturePaymentNotification($data);

        $this->assertTrue($response->successful());
        $this->assertEquals('12346', $response->order);
        $this->assertEquals(1.45, $response->amount);
        $this->assertTrue($response->secure());

        // var_dump($response->toArray());
    }
}
