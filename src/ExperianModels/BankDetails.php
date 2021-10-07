<?php

namespace CustomD\LaravelExperian\ExperianModels;

use CustomD\LaravelExperian\Consts\AccountBalanceStatus;

/**
 * \CustomD\LaravelExperian\ExperianModels\BankDetails
 *
 * @property \CustomD\LaravelExperian\ExperianModels\Time $TimeWithBank
 * @property string $BankAccountNumber
 * @property \CustomD\LaravelExperian\ExperianModels\CurrentAccountHeld $CurrentAccountHeld
 * @property \CustomD\LaravelExperian\ExperianModels\ChequeCardHeld $ChequeCardHeld
 */
class BankDetails extends Base
{

    protected $fields = [
        "TimeWithBank"       => Time::class,
        "BankAccountNumber"  => 'string',
        "CurrentAccountHeld" => CurrentAccountHeld::class,
        "ChequeCardHeld"     => ChequeCardHeld::class
    ];
}
