<?php

namespace CustomD\LaravelExperian\ExperianModels;
use CustomD\LaravelExperian\ExperianModels\PersonalDetails;
use CustomD\LaravelExperian\ExperianModels\BankDetails;
use CustomD\LaravelExperian\ExperianModels\Employment;
use CustomD\LaravelExperian\ExperianModels\AdditionalData;
use CustomD\LaravelExperian\ExperianModels\AffordabilityIQ;

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
