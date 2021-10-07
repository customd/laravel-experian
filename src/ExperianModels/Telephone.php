<?php

namespace CustomD\LaravelExperian\ExperianModels;

use CustomD\LaravelExperian\Consts\STDCode;
use CustomD\LaravelExperian\ExperianModels\YearMonth;

/**
 * @property \CustomD\LaravelExperian\Consts\STDCode $STDCode Home Telephone STD Code.
 * @property string $Number Telephone Number. Not required if STD code is set to X, N, Q or Z
 */
class Telephone extends Base
{
    protected $fields = [
        "STDCode" => STDCode::class,
        "Number"  => 'string',
    ];
}
