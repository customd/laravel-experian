<?php

namespace CustomD\LaravelExperian\ExperianModels;

use CustomD\LaravelExperian\Consts\MaritalStatus;
use CustomD\LaravelExperian\Consts\CountryOfBirth;
use CustomD\LaravelExperian\ExperianModels\Telephone;

/**
 * @property \CustomD\LaravelExperian\Consts\MaritalStatus $MaritalStatus
 * @property \CustomD\LaravelExperian\Consts\Telephone $HomeTelephone
 * @property string $MobileTelNumber
 * @property int $Dependants
 * @property \CustomD\LaravelExperian\Consts\ResidentialStatus $ResidentialStatus
 * @property string $EmailAddress
 * @property string $NatInsuranceNum
 * @property string $PassportNumber
 * @property \CustomD\LaravelExperian\Consts\CountryOfBirth $CountryOfBirth
 */
class PersonalDetails extends Base
{
    protected $fields = [
        "MaritalStatus"     => MaritalStatus::class,
        "HomeTelephone"     => Telephone::class,
        "MobileTelNumber"   => 'string',
        "Dependants"        => 'integer',
        "ResidentialStatus" => ResidentialStatus::class,
        "EmailAddress"      => 'string',
        "NatInsuranceNum"   => 'string',
        'PassportNumber'    => 'string',
        'CountryOfBirth'    => CountryOfBirth::class,
    ];
}
