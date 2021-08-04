<?php

namespace CustomD\LaravelExperian\Requests;

use CustomD\LaravelExperian\Requests\Contracts\ExperianRequest;
use ReflectionObject;
use ReflectionProperty;

class ExperianReference implements ExperianRequest
{

    protected string $reference;

    public string $clientaccnum = 'A1234';
    public bool $fullfblrequired = true;
    public bool $displayconsumer = true;
    public bool $displayauthenticate = false;
    public bool $displaydetect = false;
    public bool $displayaddress = false;
    public bool $displaycasehistory = false;

    public function __construct($reference)
    {
        $this->reference = $reference;
    }

    public function toUrl(): string
    {
        return "application/{$this->reference}";
    }

    public function toArray(): array
    {
        $refl = new ReflectionObject($this);
        $props = $refl->getProperties(ReflectionProperty::IS_PUBLIC);
        foreach ($props as $i => $prop) {
            $props[$prop->getName()] = $prop->getValue($this);
            unset($props[$i]);
        }
        return $props;
    }
}
