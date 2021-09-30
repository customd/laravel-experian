<?php

namespace CustomD\LaravelExperian\ExperianModels;

/**
 * Other name the applicant may be known by.
 * For example, Bill may be an alias of William. Each applicant may submit up to three Alias
*
* @property string $MainApplicantNMI - Main Applicant Supplied - Net Monthly Income in GBP
* @property string $JointApplicantNMI - Joint Applicant Supplied - Net Monthly Income in GBP
*/
class AffordabilityIQ extends Base
{
    protected $fields = [
        "JointApplicantNMI" => "integer",
        "MainApplicantNMI"  => "integer",
    ];

    protected $defaults = [
        "JointApplicantNMI" => 0,
        "MainApplicantNMI"  => 0,
    ];
}
