<?php

namespace CustomD\LaravelExperian\ExperianModels;

use CustomD\LaravelExperian\Consts\Gender;

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
        'Age'           => 'YearMonth',
        'ExpinPIN'      => 'string'
    ];
}
