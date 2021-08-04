<?php

namespace CustomD\LaravelExperian\ExperianModels;

use CustomD\LaravelExperian\Consts\UKCountry;
use CustomD\LaravelExperian\Consts\YesNo;

/**
 * If the full address cannot be obtained, Delphi Select supports the following targeting routines:
 *
 * House Number and one of:
 *    Post Code
 *    Street and Town
 *    Street and District
 * House Name and one of:
 *    Post Code
 *    District
 *    Town
 */
class UKLocation extends Base
{

    protected $fields = [
        'Flat'            => 'string',
        'HouseName'       => 'string',
        'HouseNumber'     => 'string',
        'Street'          => 'string',
        'Street2'         => 'string',
        'District'        => 'string',
        'District2'       => 'string',
        'PostTown'        => 'string',
        'County'          => 'string',
        'Postcode'        => 'string',
        'POBox'           => 'string',
        'Country'         => UKCountry::class,
        'SharedLetterbox' => YesNo::class
    ];
}
