<?php

namespace Descom\Redsys\Tests\Environments;

use Descom\Redsys\Environments\Production;
use Descom\Redsys\Environments\Sandbox;
use Descom\Redsys\Tests\TestCase;

class EnvironmentTest extends TestCase
{
    public function testEnvironmentTesting()
    {
        $env = new Sandbox();

        $this->assertEquals('https://sis-t.redsys.es:25443/sis/realizarPago', $env->getUrlRedirect());
        $this->assertEquals('https://sis-t.redsys.es:25443/sis/rest/trataPeticionREST', $env->getUrlRest());
    }

    public function testEnvironmentProduction()
    {
        $env = new Production();

        $this->assertEquals('https://sis.redsys.es/sis/realizarPago', $env->getUrlRedirect());
        $this->assertEquals('https://sis.redsys.es/sis/rest/trataPeticionREST', $env->getUrlRest());
    }
}
