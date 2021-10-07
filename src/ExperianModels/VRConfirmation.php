<?php

namespace CustomD\LaravelExperian\ExperianModels;

use CustomD\LaravelExperian\Consts\Confirmed;
use CustomD\LaravelExperian\Consts\Gender;
use CustomD\LaravelExperian\Consts\YesNo;

/**
 * Output field only.
 *
 * @property \CustomD\LaravelExperian\Consts\Confirmed $Confirmed
 * @property \CustomD\LaravelExperian\Consts\YesNo $Surname
 * @property \CustomD\LaravelExperian\Consts\YesNo $Forname
 * @property string YrsERSP
 * @property string YrsERSF
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
