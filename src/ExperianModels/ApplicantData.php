<?php

namespace CustomD\LaravelExperian\ExperianModels;

use CustomD\LaravelExperian\ExperianModels\PersonalDetails;
use CustomD\LaravelExperian\ExperianModels\BankDetails;
use CustomD\LaravelExperian\ExperianModels\Employment;
use CustomD\LaravelExperian\ExperianModels\AdditionalData;
use CustomD\LaravelExperian\ExperianModels\AffordabilityIQ;

/**
 * @property \CustomD\LaravelExperian\ExperianModels\PersonalDetails $PersonalDetails
 * @property \CustomD\LaravelExperian\ExperianModels\BankDetails $BankDetails
 * @property \CustomD\LaravelExperian\ExperianModels\Employment $EmploymentDetails
 * @property \CustomD\LaravelExperian\ExperianModels\AdditionalData $AdditionalData
 * @property \CustomD\LaravelExperian\ExperianModels\AffordabilityIQ $AffordabilityIQ
 */

class ApplicantData extends Base
{

    protected $fields = [
        'PersonalDetails'   => PersonalDetails::class,
        'BankDetails'       => BankDetails::class,
        'EmploymentDetails' => Employment::class,
        'AdditionalData'    => AdditionalData::class,
        'AffordabilityIQ'   => AffordabilityIQ::class
    ];
}
