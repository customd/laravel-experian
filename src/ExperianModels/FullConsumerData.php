<?php

namespace CustomD\LaravelExperian\ExperianModels;

class FullConsumerData extends Base
{

    protected $fields = [
        "ConsumerDataSummary" => "array",
        "ConsumerData"        => "array",
        "ControlDetails"      => "array"
    ];
}
