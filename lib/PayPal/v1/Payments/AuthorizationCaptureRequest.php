<?php

// This class was generated on Fri, 02 Feb 2018 14:21:16 CST by version 0.1.0-dev+dcaee0-dirty of Braintree SDK Generator
// AuthorizationCaptureRequest.php
// @version 0.1.0-dev+dcaee0-dirty
// @type request
// @data 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
// DO NOT EDIT

namespace PayPal\v1\Payments;

use BraintreeHttp\HttpRequest;class AuthorizationCaptureRequest extends HttpRequest 
{
    function __construct($authorizationId)
    {
        parent::__construct("/v1/payments/authorization/{authorization_id}/capture?", "POST");
        
        $this->path = str_replace("{authorization_id}", urlencode($authorizationId), $this->path);
        $this->headers["Content-Type"] = "application/json";
    }

    
}
