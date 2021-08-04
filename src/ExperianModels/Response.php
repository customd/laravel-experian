<?php

namespace CustomD\LaravelExperian\ExperianModels;

/**
 * \CustomD\LaravelExperian\ExperianModels\Response
 *
 * @property \CustomD\LaravelExperian\ExperianModels\Applicants $Applicants
 * @property \CustomD\LaravelExperian\ExperianModels\Locations $Locations
 * @property \CustomD\LaravelExperian\ExperianModels\Residencies $Residencies
 * @property array $FullConsumerData
 * @property array $ConsumerSummary
 * @property array $AuthPlusResults
 * @property \CustomD\LaravelExperian\ExperianModels\Detect $Detect
 * @property \CustomD\LaravelExperian\ExperianModels\ClientData $ClientData
 * @property \CustomD\LaravelExperian\ExperianModels\ThirdPartyData $ThirdPartyData
 * @property \CustomD\LaravelExperian\ExperianModels\Metrics $Metrics
 */
class Response extends Base
{

    protected $fields = [
        'Applicants'       => Applicants::class,
        'Locations'        => Locations::class,
        'Residencies'      => Residencies::class,
        'FullConsumerData' => 'array',
        'ConsumerSummary'  => 'array',
        'AuthPlusResults'  => 'array',
        'Detect'           => Detect::class,
        'ClientData'       => ClientData::class,
        'ThirdPartyData'   => ThirdPartyData::class,
        'Metrics'          => Metrics::class
    ];

    public function getTimeTaken(): int
    {
        return $this->Metrics->TimeTakeninMs;
    }

    public function getExperianReference(): string
    {
        return $this->ClientData->ExperianReference;
    }
}
