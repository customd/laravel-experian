<?php

namespace CustomD\LaravelExperian\Tests;

use Orchestra\Testbench\TestCase;
use Illuminate\Support\Facades\Config;
use CustomD\LaravelExperian\Consts\YesNo;
use CustomD\LaravelExperian\ServiceProvider;
use CustomD\LaravelExperian\Consts\LocationType;
use CustomD\LaravelExperian\Facades\DelphiSelect;
use CustomD\LaravelExperian\ExperianModels\Person;
use CustomD\LaravelExperian\Consts\ApplicationType;
use CustomD\LaravelExperian\ExperianModels\Options;
use CustomD\LaravelExperian\ExperianModels\Response;
use CustomD\LaravelExperian\Facades\LaravelExperian;
use CustomD\LaravelExperian\ExperianModels\Applicant;
use CustomD\LaravelExperian\ExperianModels\Locations;
use CustomD\LaravelExperian\ExperianModels\Applicants;
use CustomD\LaravelExperian\ExperianModels\ClientData;
use CustomD\LaravelExperian\ExperianModels\Submission;
use CustomD\LaravelExperian\ExperianModels\UKLocation;
use CustomD\LaravelExperian\ExperianModels\Application;
use CustomD\LaravelExperian\ExperianModels\Residencies;
use CustomD\LaravelExperian\ExperianModels\LocationItem;
use CustomD\LaravelExperian\ExperianModels\ResidencyItem;

class LaravelExperianTest extends TestCase
{
    protected function getPackageProviders($app)
    {
        return [ServiceProvider::class];
    }

    protected function getPackageAliases($app)
    {
        return [
            'laravel-experian' => LaravelExperian::class,
        ];
    }

    public function testExample()
    {
        $this->assertEquals(1, 1);
    }

    protected function buildSubmission()
    {
        $submission = new Submission();

        $applicant = new Applicant();
        $applicant->Person = new Person([
            'Title'       => '',
            'Forename'    => 'Alexander',
            'Surname'     => 'Mayer',
            'DateOfBirth' => '1981-06-19'
        ]);
        $submission->Applicants = new Applicants([$applicant]);

        $uklocation = new UKLocation([
            'HouseNumber' => '36',
            'Postcode'    => "BT13 3SJ",
        ]);

        $location = new LocationItem(['UKLocation' => $uklocation]);

        $submission->Locations = new Locations([$location]);

        $residency = new ResidencyItem(
            [
                "ResidentFrom"  => "2018-02-18",
                "ResidentTo"    => "2019-02-18",
                "Type"          => LocationType::CURRENT_ADDRESS,
                "CanBeSearched" => YesNo::OPT_YES,
            ]
        );
        $submission->Residencies  = new Residencies([$residency]);

        $submission->Application = new Application(
            [
                'ApplicationType' => ApplicationType::EQ,
                'SearchConsent'   => true,
            ]
        );

        $submission->Options = new Options([
            "FullFBLRequired"          => true,
            "AuthenticatePlusRequired" => true,
            "DetectRequired"           => true,
        ]);

        $submission->ClientData = new ClientData([
            "ClientAccountNumber" => "A1234"
        ]);

        return $submission;
    }

    public function testBuildsASubmissionBasic()
    {

        $this->assertEquals('{
    "Submission": {
        "Applicants": [
            {
                "ApplicantIdentifier": 1,
                "Person": {
                    "Title": "",
                    "Forename": "Alexander",
                    "Surname": "Mayer",
                    "DateOfBirth": "1981-06-19"
                }
            }
        ],
        "Locations": [
            {
                "LocationIdentifier": 1,
                "UKLocation": {
                    "HouseNumber": "36",
                    "Postcode": "BT13 3SJ"
                }
            }
        ],
        "Residencies": [
            {
                "ApplicantIdentifier": 1,
                "LocationIdentifier": 1,
                "Type": "C",
                "CanBeSearched": "Y",
                "ResidentFrom": "2018-02-18",
                "ResidentTo": "2019-02-18"
            }
        ],
        "Application": {
            "ApplicationType": "EQ",
            "MortgageType": "E",
            "ApplicationChannel": "FA",
            "AuthenticationType": "C",
            "ManualAuthenticationRequired": false,
            "SearchConsent": true
        },
        "Options": {
            "ProductCode": "DelphiSelect",
            "FullFBLRequired": true,
            "AuthenticatePlusRequired": true,
            "DetectRequired": true,
            "TestDatabase": "A"
        },
        "ClientData": {
            "ClientAccountNumber": "A1234"
        }
    }
}', json_encode($this->buildSubmission(), JSON_PRETTY_PRINT));
    }

    public function DisabledtestCall()
    {
        Config::set('experian.credentials', [
            'client_id'     => "xxx",
            'client_secret' => "xxx",
            'username'      => "xxx",
            'password'      => "xxx",
        ]);

        Response::macro('getScore', function () {
            /** @var \CustomD\LaravelExperian\ExperianModels\Response $this */
            return $this->Detect->CreditScore;
        });

        $submission = $this->buildSubmission();
        $res = DelphiSelect::create($submission);

        dd($res->getScore());

        dd(json_encode($res));
    }
}
