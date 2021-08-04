<?php

namespace CustomD\LaravelExperian\ExperianModels;

use Illuminate\Support\Collection;

class RuleIndicators extends Collection
{

    public static function from($value)
    {
        return new static($value);
    }
}
