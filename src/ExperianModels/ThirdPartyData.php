<?php

namespace CustomD\LaravelExperian\ExperianModels;

class ThirdPartyData extends Base
{

    protected $fields = [
        "OptOut",
        "TransientAssociation",
        "HHOAllowed",
        "OptOutValidCutOff",
        "OutcomeCode",
    ];

    protected $defaults = [
        "OptOut"               => "Y",
        "TransientAssociation" => "Y",
        "HHOAllowed"           => "Y",
    ];
}
