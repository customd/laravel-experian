<?php

namespace CustomD\LaravelExperian\ExperianModels;

use CustomD\LaravelExperian\ExperianModels\Telephone;
use CustomD\LaravelExperian\ExperianModels\Time;
use CustomD\LaravelExperian\Consts\OccupationStatus;
use CustomD\LaravelExperian\Consts\EmploymentStatus;

/**
 * @property string $GrossAnnualIncome Gross Annual Income in GBP. May contain '£'
 * @property \CustomD\LaravelExperian\ExperianModels\Telephone $WorkTelephone
 * @property \CustomD\LaravelExperian\ExperianModels\Time $TimeWithEmployer
 * @property string $EmployerName The company name of the applicant’s current employer
 * @property \CustomD\LaravelExperian\Consts\OccupationStatus $OccupationStatus
 * @property \CustomD\LaravelExperian\Consts\EmploymentStatus $EmploymentStatus
 */
class Employment extends Base
{
    protected $fields = [
        'GrossAnnualIncome' => 'string',
        'WorkTelephone'     => Telephone::class,
        'TimeWithEmployer'  => Time::class,
        'EmployerName'      => 'string',
        'OccupationStatus'  => OccupationStatus::class,
        'EmploymentStatus'  => EmploymentStatus::class,
    ];
}
