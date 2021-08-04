<?php

namespace CustomD\LaravelExperian\ExperianModels;

/**
 * \CustomD\LaravelExperian\ExperianModels\Metrics
 *
 * @property \CustomD\LaravelExperian\Consts\AccountBalanceStatus $Status
 * @property string $ProcessStarted
 * @property string $ProcessEnded
 * @property int $TimeTakeninMs
 * @property array $Steps
 */
class Metrics extends Base
{

    protected $fields = [
        "ProcessStarted" => 'string',
        "ProcessEnded"   => 'string',
        "TimeTakeninMs"  => 'integer',
        "Steps"          => 'array',
    ];
}
