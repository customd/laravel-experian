<?php

namespace CustomD\LaravelExperian\Facades;

use CustomD\LaravelExperian\Clients\DelphiSelect as DelphiSelectClient;
use Illuminate\Support\Facades\Facade;

class DelphiSelect extends Facade
{
    protected static function getFacadeAccessor()
    {
        return DelphiSelectClient::class;
    }
}
