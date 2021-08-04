<?php

namespace CustomD\LaravelExperian\ExperianModels;

/**
 * Containing the the financial and personal information of the applicants to be targeted as part of the Consumer Application.
 * Data will be used for Identity Authentication and Affordability calculations (e.g. income, number of dependants, telephone number etc.).
 * The first submitted applicant will be the main applicant.
 */
class Applicant extends Base
{
    protected $fields = [
        "ApplicantIdentifier" => 'integer', // unique
        "Person"              => Person::class,
        "Alias"               => Aliases::class,
        "Association"         => AssociationItems::class,
        "ApplicantData"       => ApplicantData::class,
    ];

    protected $defaults = [
        'ApplicantIdentifier' => 1
    ];
}
