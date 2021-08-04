<?php

namespace CustomD\LaravelExperian\Consts;

use MyCLabs\Enum\Enum;

class LocationType extends Enum
{

    public const CURRENT_ADDRESS = 'C';
    public const PREVIOUS_ADDRESS = 'P';
    public const OTHER = 'O';

    /** Lib has both of these as options! ? */
    public const ICURRENT_ADDRESS = '01';
    public const IPREVIOUS_PREVIOUS_ADDRESS = '02';
    public const IPREVIOUS_ADDRESS = '03';
}
