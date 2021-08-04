<?php

namespace CustomD\LaravelExperian\Consts;

use MyCLabs\Enum\Enum;

class AccountBalanceStatus extends Enum
{


    public const SATISFACTORY = '0';
    public const ONE_MONTH_DELINQUENT = '1';
    public const TWO_MONTHS_DELINQUENT = '2';
    public const THREE_MONTHS_DELINQUENT = '3';
    public const FOUR_MONTHS_DELINQUENT = '4';
    public const FIVE_MONTHS_DELINQUENT = '5';
    public const SIX_MONTHS_DELINQUENT = '6';
    public const DEFAULT = '8';
    public const BAD_DEBT = '9';
    public const SLOW_PAYER = 'S';
    public const UNCLASSIFIED = 'U';
    public const DORMANT = 'D';
    public const UNKNOWN = '?';
}
