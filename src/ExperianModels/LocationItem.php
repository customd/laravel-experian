<?php

namespace CustomD\LaravelExperian\ExperianModels;

/**
 * A current address must be supplied for each applicant.
 * Each applicant can submit up to 3 addresses; a current addaress, a previous address,
 * and a previous previous address (totalling up to 12 addresses across 4 applicants).
 * An application must contain at least one populated location, either a UK Location,
 * BFPO Location ,or OverSeas Location.
 * A request for Detect data will only support the first 2 applicants and only their current
 * and previous address(ese) will be searched if provided.
 */
class LocationItem extends Base
{

    protected $fields = [
        'LocationIdentifier' => 'integer',
        'UKLocation'         => UKLocation::class,
        'BFPOLocation'       => BFPOLocation::class,
        'OverSeasLocation'   => OverSeasLocation::class,
    ];

    protected $defaults = [
        'LocationIdentifier' => 1
    ];
}
