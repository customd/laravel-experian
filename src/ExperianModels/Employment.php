<?php

namespace CustomD\LaravelExperian\ExperianModels;
use CustomD\LaravelExperian\ExperianModels\Telephone;
use CustomD\LaravelExperian\ExperianModels\Time;
use CustomD\LaravelExperian\Consts\OccupationStatus;
use CustomD\LaravelExperian\Consts\EmploymentStatus;

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
