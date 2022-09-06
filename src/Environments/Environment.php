<?php

namespace Descom\Redsys\Environments;

abstract class Environment
{
    private const URL_PRODUCTION = 'https://sis.redsys.es/sis';
    private const URL_TESTING = 'https://sis-t.redsys.es:25443/sis';

    private const PATH_REDIRECT = 'realizarPago';
    private const PATH_REST = 'rest/trataPeticionREST';

    protected bool $isProduction = false;

    protected function production(): self
    {
        $this->isProduction = true;

        return $this;
    }

    public function getUrlRedirect(): string
    {
        $url = $this->isProduction
            ? self::URL_PRODUCTION
            : self::URL_TESTING;

        return $url . '/' . self::PATH_REDIRECT;
    }

    public function getUrlRest(): string
    {
        $url = $this->isProduction
            ? self::URL_PRODUCTION
            : self::URL_TESTING;

        return $url . '/' . self::PATH_REST;
    }
}
