<?php

namespace PayPal\Core;

use BraintreeHttp\HttpClient;

class PayPalHttpClient extends HttpClient
{
    private $refreshToken;
    public $authInjector;

    public function __construct(PayPalEnvironment $environment, $refreshToken = NULL)
    {
        parent::__construct($environment);
        $this->refreshToken = $refreshToken;
        $this->authInjector = new AuthorizationInjector($this, $environment, $refreshToken);
        $this->addInjector($this->authInjector);
        $this->addInjector(new GzipInjector());
    }

    public function userAgent()
    {
        return UserAgent::getValue();
    }
}

