<?php

namespace CustomD\LaravelExperian\Consts;

use MyCLabs\Enum\Enum;

class ResidentialStatus extends Enum
{
    public const OWNER_OCCUPIER = 'O';
    public const LIVING_WITH_PARENTS = 'P';
    public const TENANT_FURNISHED = 'F';
    public const TENANT_UNFURNISHED = 'U';
    public const COUNCIL_TENANT = 'C';
    public const OTHER_TENANT = 'T';
    public const JOINT_OWNER = 'J';
    public const OTHER = 'X';
    public const NOT_ASKED = 'Q';
    public const NOT_GIVEN = 'Z';
}
