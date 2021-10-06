<?php

namespace CustomD\LaravelExperian\Consts;

use MyCLabs\Enum\Enum;

class CountryOfBirth extends Enum
{

    /**
     * New application or proposal
     */
    public const ENGLAND = 'E';
    public const WALES = 'W';
    public const SCOTLAND = 'S';
    public const NORTHERN_IRELAND = 'I';
    public const OTHER = 'O';
}
