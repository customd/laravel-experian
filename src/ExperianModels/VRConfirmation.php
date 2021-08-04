<?php

namespace CustomD\LaravelExperian\ExperianModels;

use CustomD\LaravelExperian\Consts\Confirmed;
use CustomD\LaravelExperian\Consts\Gender;
use CustomD\LaravelExperian\Consts\YesNo;

/**
 * Output field only.
 */
class VRConfirmation extends Base
{
    protected $fields = [
        "Confirmed" => Confirmed::class,
        "Surname"   => YesNo::class,
        "Forename"  => YesNo::class,
        "YrsERSP"   => 'string',
        "YrsERSF"   => 'string',
    ];
}
