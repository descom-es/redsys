<?php

namespace Descom\Redsys\Exceptions;

use Exception;

class RequestFailed extends Exception
{
    public function __construct(string $errorCode)
    {
        parent::__construct("Request failed with error code $errorCode", 1);
    }
}
