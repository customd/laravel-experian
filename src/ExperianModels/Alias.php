<?php

namespace CustomD\LaravelExperian\ExperianModels;

use CustomD\LaravelExperian\Consts\Gender;
use CustomD\LaravelExperian\Consts\Source;

/**
 * Other name the applicant may be known by.
 * For example, Bill may be an alias of William. Each applicant may submit up to three Alias
*
 * @property string $Title
 * @property string $Forename
 * @property string $MiddleName
 * @property string $Surname
 * @property string $Suffix
 * @property \CustomD\LaravelExperian\Consts\Gender $Gender
 * @property \CustomD\LaravelExperian\Consts\Source $Source
 * @property array $Rules
*/
class Alias extends Base
{
    protected $fields = [
        "Title"      => "string",
        "Forename"   => "string",
        "MiddleName" => "string",
        "Surname"    => "string",
        "Suffix"     => "string",
        "Gender"     => Gender::class,
        "Source"     => Source::class,
    ];

    protected $defaults = [
        "Title"    => "Mr",
        "Forename" => 'B',
        "Surname"  => 'User',
        "Gender"   => Gender::MALE
    ];
}
