<?php

namespace CustomD\LaravelExperian\ExperianModels;

use CustomD\LaravelExperian\Consts\Gender;

class AssociationItemPerson extends Base
{

    protected $fields = [
        "Title"         => 'string',
        "Forename"      => 'string',
        "MiddleName"    => 'string',
        "Surname"       => 'string',
        "Suffix"        => 'string',
        "Gender"        => Gender::class,
        "DateOfBirth"   => 'string',
        "Age"           => YearMonth::class,
        "FormattedName" => 'string'
    ];
}
