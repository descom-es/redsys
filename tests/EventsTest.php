<?php

namespace Descom\Redsys\Tests;

use Descom\Redsys\Events\Event;
use Descom\Redsys\Events\Events;
use Descom\Redsys\Events\FailedPayment;
use Descom\Redsys\Merchants\MerchantBuilder;
use Descom\Redsys\Parameters;
use Descom\Redsys\Response;

class EventsTest extends TestCase
{
    public function testDispatchFailedPaymentEventNotDefined()
    {
        $dispatched = Events::dispatch(new FailedPayment(new Response(MerchantBuilder::testing(), new Parameters([]))));

        $this->assertFalse($dispatched);
    }

    public function testDispatchFailedPaymentEvent()
    {
        Events::failedPayment(function (Response $response, Event $event) {
            $this->assertInstanceOf(Response::class, $response);
            $this->assertInstanceOf(FailedPayment::class, $event);
        });

        $dispatched = Events::dispatch(new FailedPayment(new Response(MerchantBuilder::testing(), new Parameters([]))));

        $this->assertTrue($dispatched);
    }
}
