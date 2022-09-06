<?php

namespace Descom\Redsys\Environments;

class Production extends Environment
{
    public function __construct()
    {
        $this->production();
    }
}
