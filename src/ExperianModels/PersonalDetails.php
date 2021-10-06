<?php

namespace CustomD\LaravelExperian\ExperianModels;

use CustomD\LaravelExperian\Consts\CountryOfBirth;
use CustomD\LaravelExperian\Consts\MaritalStatus;

class PersonalDetails extends Base
{
    protected $fields = [
        "MaritalStatus"     => MaritalStatus::class,
        "HomeTelephone"     => 'string',
        "MobileTelNumber"   => 'string',
        "Dependants"        => 'integer',
        "ResidentialStatus" => ResidentialStatus::class,
        "EmailAddress"      => 'string',
        "NatInsuranceNum"   => 'string',
        'PassportNumber'    => 'string',
        'CountryOfBirth'    => CountryOfBirth::class,
    ];
}
