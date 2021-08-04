<?php

namespace CustomD\LaravelExperian\Consts;

use MyCLabs\Enum\Enum;

class Source extends Enum
{

    public const PROPOSAL = 'P';
    public const EXISTING = 'E';
    public const TELEPHONE = 'T';
    public const OTHER = 'O';
}
