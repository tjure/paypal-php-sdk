<?php

// This class was generated on Fri, 02 Feb 2018 14:21:16 CST by version 0.1.0-dev+dcaee0-dirty of Braintree SDK Generator
// CaptureRefundRequest.php
// @version 0.1.0-dev+dcaee0-dirty
// @type request
// @data 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
// DO NOT EDIT

namespace PayPal\v1\Payments;

use BraintreeHttp\HttpRequest;class CaptureRefundRequest extends HttpRequest 
{
    function __construct($captureId)
    {
        parent::__construct("/v1/payments/capture/{capture_id}/refund?", "POST");
        
        $this->path = str_replace("{capture_id}", urlencode($captureId), $this->path);
        $this->headers["Content-Type"] = "application/json";
    }

    
}
