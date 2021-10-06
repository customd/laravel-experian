<?php

namespace CustomD\LaravelExperian\ExperianModels;

class AdditionalData extends Base
{
    protected $fields = [
        'DrivingLicenceNumber'  => 'string',
        'VehicleRegistration'   => 'string',
        'PlaceOfBirth'          => 'string',
        'MothersMaidenName'     => 'string',
        'BirthSurname'          => 'string',
    ];
}
