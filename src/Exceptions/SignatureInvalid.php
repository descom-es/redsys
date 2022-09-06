<?php

namespace Descom\Redsys\Exceptions;

use Exception;

class SignatureInvalid extends Exception
{
    public function __construct()
    {
        parent::__construct("Firma incorrecta", 1);
    }
}
