<?php

namespace CustomD\LaravelExperian\ExperianModels;

use CustomD\LaravelExperian\Consts\AccountBalanceStatus;

/**
 * \CustomD\LaravelExperian\ExperianModels\Response
 *
 * @property \CustomD\LaravelExperian\Consts\AccountBalanceStatus $Status
 * @property string $AccountBalance
 */
class AccountBalance extends Base
{

    protected $fields = [
        "AccountBalance" => "string",
        "Status"         => AccountBalanceStatus::class
    ];

    public function isUnknown(): bool
    {
        return $this->AccountBalance === '-999998';
    }
}
