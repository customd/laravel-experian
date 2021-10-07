<?php

namespace CustomD\LaravelExperian\Consts;

use MyCLabs\Enum\Enum;

class ChequeCardHeld extends Enum
{
    public const OPT_YES = 'Y';
    public const OPT_NO = 'S';
    public const NOT_ASKED = 'Q';
    public const NOT_GIVEN = 'Z';
}
