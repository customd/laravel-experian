<?php

namespace CustomD\LaravelExperian\Consts;

use MyCLabs\Enum\Enum;

class Confirmed extends Enum
{
    public const CONFIRMED = 'Y';
    public const ALIAS_CONFIRMED = 'S';
    public const FAMILY_CONFIRMED = 'F';
    public const NOT_CONFIRMED = 'N';
}
