<?php

namespace CustomD\LaravelExperian\ExperianModels;

use CustomD\LaravelExperian\Consts\LocationType;
use CustomD\LaravelExperian\Consts\YesNo;

class ResidencyItem extends Base
{

    protected $fields = [
        "ApplicantIdentifier" => 'integer',
        "LocationIdentifier"  => 'integer',
        "TimeAt"              => ResidencyItemYearMonth::class,
        "ResidentFrom"        => 'string',
        "ResidentTo"          => 'string',
        "Type"                => LocationType::class,
        "CanBeSearched"       => YesNo::class,
        'VRConfirmation'      => VRConfirmation::class,
    ];

    protected $defaults = [
        'ApplicantIdentifier' => 1,
        'LocationIdentifier'  => 1,
        "Type"                => LocationType::CURRENT_ADDRESS,
        "CanBeSearched"       => YesNo::OPT_YES,
    ];
}
