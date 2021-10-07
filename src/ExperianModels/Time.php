<?php

namespace CustomD\LaravelExperian\ExperianModels;

/**
 * @property string $Years
 * @property string $Months
 */
class Time extends Base
{
    protected $fields = [
        'Years'  => 'string',
        'Months' => 'string',
    ];
}
