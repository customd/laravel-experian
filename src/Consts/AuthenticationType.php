<?php

namespace CustomD\LaravelExperian\Consts;

use MyCLabs\Enum\Enum;

class AuthenticationType extends Enum
{
    public const DIRECTOR = 'D';
    public const CONSUMER = 'C';
    public const CNPTRANSACTION = 'T';
}
