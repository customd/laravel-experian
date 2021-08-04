<?php

namespace CustomD\LaravelExperian\ExperianModels;

use CustomD\LaravelExperian\Consts\MortgageType;
use CustomD\LaravelExperian\Consts\ApplicationType;
use CustomD\LaravelExperian\Consts\ApplicationChannel;
use CustomD\LaravelExperian\Consts\AuthenticationType;

/**
 * Containing details of the application including the search type,
 * product and purpose along with other application details
 */
class Application extends Base
{

    protected $fields = [
        "ApplicationType"              => ApplicationType::class,
        "ProductType"                  => 'string', //Not currently used
        "Amount"                       => 'string',
        "Term"                         => 'string',
        "Purpose"                      => 'string',
        "PropertyValue"                => 'string',
        "MortgageType"                 => MortgageType::class,
        "MonthlyAmount"                => 'string',
        "LimitApplied"                 => 'string',
        "LimitGiven"                   => 'string',
        "ApplicationChannel"           => ApplicationChannel::class,
        "AuthenticationType"           => AuthenticationType::class,
        "ManualAuthenticationRequired" => 'boolean',
        "SearchConsent"                => 'boolean',
    ];

    protected $defaults = [
        'ApplicationType'              => ApplicationType::EQ, //
        'MortgageType'                 => MortgageType::ENDOWNMENT,
        'ApplicationChannel'           => ApplicationChannel::FAX,
        'AuthenticationType'           => AuthenticationType::CONSUMER,
        'ManualAuthenticationRequired' => false,
        'SearchConsent'                => false,
    ];
}
