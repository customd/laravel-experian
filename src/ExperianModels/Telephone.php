<?php

namespace CustomD\LaravelExperian\ExperianModels;

use CustomD\LaravelExperian\Consts\STDCode;
use CustomD\LaravelExperian\ExperianModels\YearMonth;

class Telephone extends Base
{
    protected $fields = [
        "STDCode"   => STDCode::class,
        "Number"    => 'string',
    ];
}
