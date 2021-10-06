<?php

namespace CustomD\LaravelExperian\Consts;

use MyCLabs\Enum\Enum;

class EmploymentStatus extends Enum
{
    public const EMPLOYED = 'E';
    public const SELF_EMPLOYED_PROFESSIONAL = 'P';
    public const SELF_EMPLOYED_NON_PROFESSIONAL = 'N';
    public const STUDENT = 'S';
    public const HOUSEWIFE = 'H';
    public const RETIRED = 'R';
    public const PART_TIME_EMPLOYED = 'L';
    public const TEMPORARY_EMPLOYMENT = 'T';
    public const UNEMPLOYED = 'U';
    public const OTHER = 'X';
    public const NOT_GIVEN = 'Z';
}
