<?php

namespace CustomD\LaravelExperian\ExperianModels;

class Submission extends Base
{

    protected $fields = [
        'Applicants'     => Applicants::class,
        'Locations'      => Locations::class,
        'Residencies'    => Residencies::class,
        'Application'    => Application::class,
        'ClientData'     => ClientData::class,
        'ThirdPartyData' => ThirdPartyData::class,
        'Options'        => Options::class
    ];

    protected $defaults = [
  //      'Options' => new Options()
    ];


    protected function fillDefaults(): void
    {
        parent::fillDefaults();
        $this->Options = new Options();
    }


    public function jsonSerialize()
    {
        return ['Submission' => $this->toArray()];
    }
}
