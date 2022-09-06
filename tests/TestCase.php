<?php

namespace Descom\Redsys\Tests;

use PHPUnit\Framework\TestCase as PhpUnitTestCase;

class TestCase extends PhpUnitTestCase
{
    protected function merchantSandboxParams(): array
    {
        return [
            'code' => 999008881,
            'terminal' => 1,
            'signatureKey' => 'sq7HjrUOBfKmC576ILgskD5srU870gJ7',
        ];
    }
}
