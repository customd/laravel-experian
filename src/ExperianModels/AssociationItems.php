<?php

namespace CustomD\LaravelExperian\ExperianModels;

use Illuminate\Support\Collection;

class AssociationItems extends Collection
{

    public static function from($value)
    {
        return new static(collect($value)->map(fn($val) => new AssociationItem($val))->toArray());
    }
}
