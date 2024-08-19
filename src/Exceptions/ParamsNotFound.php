<?php

namespace Descom\Redsys\Exceptions;

use Exception;

class ParamsNotFound extends Exception
{
    public function __construct(public readonly string $parameter)
    {
        parent::__construct("Parametro $parameter no encontrado", 1);
    }
}
