<?php

namespace CustomD\LaravelExperian\ExperianModels;

use CustomD\LaravelExperian\Consts\Database;
use CustomD\LaravelExperian\Consts\ProductCode;

/**
 * Containing details on which products and Experian Account must be used to perform the Consumer Application
 */
class Options extends Base
{

    protected $fields = [
        "ProductCode"              => ProductCode::class,
        "FullFBLRequired"          => 'boolean',
        "AuthenticatePlusRequired" => 'boolean',
        "DetectRequired"           => 'boolean',
        "TestDatabase"             => Database::class,
    ];

    protected $defaults = [
        "ProductCode"              => ProductCode::DELPHISELECT,
        "FullFBLRequired"          => true,
        "AuthenticatePlusRequired" => true,
        "DetectRequired"           => true,
    ];
}
