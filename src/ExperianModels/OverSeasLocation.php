<?php

namespace CustomD\LaravelExperian\ExperianModels;

/**
 * Overseas addresses can be supplied for record keeping but will not be searched on the Experian UK Bureau.
 */
class OverSeasLocation extends Base
{

    protected $fields = [
        'LocationLine1' => 'string',
        'LocationLine2' => 'string',
        'LocationLine3' => 'string',
        'LocationLine4' => 'string',
        'LocationLine5' => 'string',
        'LocationLine6' => 'string',
    ];
}
