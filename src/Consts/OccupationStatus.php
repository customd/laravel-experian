<?php

namespace CustomD\LaravelExperian\Consts;

use MyCLabs\Enum\Enum;

class OccupationStatus extends Enum
{
    public const SENIOR_MANAGEMENT = 'T';
    public const MANAGEMENT_PROFESSIONAL = 'M';
    public const SUPERVISOR = 'O';
    public const SKILLED = 'S';
    public const SEMI_SKILLED = 'P';
    public const UNSKILLED = 'N';
    public const JUNIOR = 'J';
    public const OTHER = 'X';
    public const UNEMPLOYED = 'U';
    public const NOT_GIVEN = 'Z';
}
