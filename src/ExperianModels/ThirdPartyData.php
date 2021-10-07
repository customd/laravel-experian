<?php

namespace CustomD\LaravelExperian\ExperianModels;

use CustomD\LaravelExperian\Consts\YesNo;

/**
 * @property \CustomD\LaravelExperian\Consts\YesNo $OptOut Include or exclude financial associates data from processing
 * @property \CustomD\LaravelExperian\Consts\YesNo $TransientAssociation Transient Associations Flag
 * @property \CustomD\LaravelExperian\Consts\YesNo $HHOAllowed Household Override Allowed Flag
 * @property string OptOutValidCutOff Opt out score cut off. Can be one of: N - No Opt Out Cut off required OR 5 digit cut off score. Required if OptOut set to Y
 * @property-read string $OutcomeCode Output field only. Third Party Data Outcome code for the application
 */
class ThirdPartyData extends Base
{

    protected $fields = [
        "OptOut"               => YesNo::class,
        "TransientAssociation" => YesNo::class,
        "HHOAllowed"           => YesNo::class,
        "OptOutValidCutOff"    => 'string',
        "OutcomeCode"          => 'string',
    ];

    protected $defaults = [
        "OptOut"               => YesNo::OPT_YES,
        "TransientAssociation" => YesNo::OPT_YES,
        "HHOAllowed"           => YesNo::OPT_YES,
    ];
}
