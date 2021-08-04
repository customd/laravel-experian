<?php

namespace CustomD\LaravelExperian\ExperianModels;

class ApplicantData extends Base
{

    protected $fields = [
        'PersonalDetails'   => PersonalDetails::class,
        'BankDetails'       => BankDetails::class,
        'EmploymentDetails' => EmploymentDetails::class,
        'AdditionalData'    => AdditionalData::class
    ];
}
