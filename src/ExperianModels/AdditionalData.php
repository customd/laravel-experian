<?php

namespace CustomD\LaravelExperian\ExperianModels;

/**
 * \CustomD\LaravelExperian\ExperianModels\AdditionalData
 *
 * @property string $DrivingLicenceNumber
 * @property string $VehicleRegistration
 * @property string $PlaceOfBirth
 * @property string $MothersMaidenName
 * @property string $BirthSurname
 */
class AdditionalData extends Base
{
    protected $fields = [
        'DrivingLicenceNumber' => 'string',
        'VehicleRegistration'  => 'string',
        'PlaceOfBirth'         => 'string',
        'MothersMaidenName'    => 'string',
        'BirthSurname'         => 'string',
    ];
}
