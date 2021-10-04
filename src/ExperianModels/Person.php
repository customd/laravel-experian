<?php

namespace CustomD\LaravelExperian\ExperianModels;

use CustomD\LaravelExperian\Consts\Gender;
use CustomD\LaravelExperian\ExperianModels\YearMonth;

class Person extends Base
{
    protected $fields = [
        "Title"         => 'string',
        "Forename"      => 'string',
        "MiddleName"    => 'string',
        "Surname"       => 'string',
        "Suffix"        => 'string',
        "Gender"        => Gender::class,
        "DateOfBirth"   => 'string',
        'FormattedName' => 'string',
        'Age'           => YearMonth::class,
        'ExpinPIN'      => 'string'
    ];
}
