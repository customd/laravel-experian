<?php

namespace CustomD\LaravelExperian\ExperianModels;

/**
 * \CustomD\LaravelExperian\ExperianModels\Detect
 *
 * @property int $CreditScore
 * @property int $FraudIndex
 * @property int $AppScore
 * @property array $Rules
*/
class Detect extends Base
{
    protected $fields = [
        'CreditScore' => 'integer',
        'FraudIndex'  => 'integer',
        'AppScore'    => 'integer',
        'Rules'       => Rules::class
    ];
}
