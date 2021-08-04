<?php

namespace CustomD\LaravelExperian\Consts;

use MyCLabs\Enum\Enum;

class MortgageType extends Enum
{

    public const ENDOWNMENT = 'E';
    public const REPAYMENT = 'R';
    public const NOT_ASKED = 'Z';
}
