<?php

namespace CustomD\LaravelExperian\ExperianModels;

use Illuminate\Support\Collection;

class Applicants extends Collection
{

    public static function from($value)
    {
        return new static(collect($value)->map(fn($val) => new Applicant($val))->toArray());
    }
}
