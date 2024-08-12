<?php

namespace Descom\Redsys\Events;

use Descom\Redsys\Response;

abstract class Event
{
    public function __construct(public readonly Response $response)
    {
    }
}
