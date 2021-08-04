<?php

namespace CustomD\LaravelExperian\ExperianModels;

class BFPOLocation extends Base
{

    protected $fields = [
        'LocationLine1' => 'string',
        'LocationLine2' => 'string',
        'LocationLine3' => 'string',
        'LocationLine4' => 'string',
        'LocationLine5' => 'string',
        'LocationLine6' => 'string',
        'Postcode'      => 'string',
    ];
}
