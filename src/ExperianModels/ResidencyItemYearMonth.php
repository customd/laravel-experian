<?php

namespace CustomD\LaravelExperian\ExperianModels;

class ResidencyItemYearMonth extends Base
{
    protected $fields = [
        'Years'  => 'string',
        'Months' => 'string'
    ];

    public function setYears($value)
    {
        $this->setAttribute('Years', str_pad($value, 2, '0', STR_PAD_LEFT));
    }
    public function setMonths($value)
    {
        $this->setAttribute('Months', str_pad($value, 2, '0', STR_PAD_LEFT));
    }
}
