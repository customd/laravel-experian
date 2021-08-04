<?php

namespace CustomD\LaravelExperian\Consts;

use MyCLabs\Enum\Enum;

class Gender extends Enum
{
    public const MALE = 'M';
    public const FEMALE = 'F';
    public const NOT_ASKED = 'Q';
    public const NOT_GIVEN = 'Z';
    public const EMPTY = '';
}
