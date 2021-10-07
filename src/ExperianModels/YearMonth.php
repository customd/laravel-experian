<?php

namespace CustomD\LaravelExperian\ExperianModels;

use CustomD\LaravelExperian\Consts\Gender;

/**
 * Output field only. Age in years and months.
 *
 * @property string $Years
 * @property string $months
 */
class YearMonth extends Base
{
    protected $fields = [
        "Years"  => 'string',
        "Months" => 'string',
    ];
}
