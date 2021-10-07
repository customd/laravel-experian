<?php

namespace CustomD\LaravelExperian\Consts;

use MyCLabs\Enum\Enum;

class MaritalStatus extends Enum
{
    public const MARRIED = 'M';
    public const SINGLE = 'S';
    public const DIVORCED = 'D';
    public const WIDOWED = 'W';
    public const TO_BE_MARRIED = 'E';
    public const COHABITING = 'C';
    public const SEPARATED = 'X';
    public const OTHER = 'O';
    public const NOT_ASKED = 'Q';
    public const NOT_GIVEN = 'Z';
}
