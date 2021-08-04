<?php

namespace CustomD\LaravelExperian\ExperianModels;

class RuleItem extends Base
{
    protected $fields = [
        'ApplicantIdentifier' => 'integer',
        'LocationIdentifier'  => 'integer',
        'NumberOfRules'       => 'integer',
        'RuleIndicator'       => RuleIndicators::class
    ];
}
