<?php

namespace Descom\Redsys\Exceptions;

use Descom\Redsys\Messages\SisMessages;
use Exception;

class RequestFailed extends Exception
{
    public function __construct(public readonly string $errorCode)
    {
        parent::__construct("Request failed with error code: $errorCode (" . $this->description() . ")", 1);
    }

    public function description()
    {
        return SisMessages::description($this->errorCode) ?? 'Error genérico';
    }
}
