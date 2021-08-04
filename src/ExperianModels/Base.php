<?php

namespace CustomD\LaravelExperian\ExperianModels;

use Exception;
use JsonSerializable;
use Illuminate\Support\Str;
use Illuminate\Contracts\Support\Arrayable;
use Illuminate\Support\Traits\Macroable;

abstract class Base implements JsonSerializable, Arrayable
{
    use Macroable;

    protected array $attributes = [];


    public function __construct(array $attributes = [])
    {
        $this->fillDefaults();
        $this->fill($attributes);
    }

    public function __get(string $key)
    {
        if (! isset($this->fields[$key])) {
            throw new Exception(__('experian.errors.key_not_in_model', [':key' => $key]));
        }
        return $this->attributes[$key] ?? null;
    }

    public function __set(string $key, $value): self
    {
        if ($this->hasSetMutator($key)) {
            $this->setMutatedAttributeValue($key, $value);
        } else {
            $this->setAttribute($key, $value);
        }
        return $this;
    }

    public function getAttribute($key)
    {
        return $this->attributes[$key] ?? null;
    }


    protected function fillDefaults(): void
    {
        if (property_exists($this, 'defaults') && is_array($this->defaults)) {
            $this->fill($this->defaults);
        }
    }

    protected function hasSetMutator($key): bool
    {
        return method_exists($this, 'set' . Str::studly($key));
    }

    protected function setMutatedAttributeValue($key, $value): void
    {
        $this->{'set' . Str::studly($key)}($value);
    }

    public function setAttribute($key, $value): void
    {
        if (! isset($this->fields[$key])) {
            throw new Exception(__('experian::errors.key_not_in_model', ['key' => $key]));
        }

        if (! ($value instanceof $this->fields[$key]) && class_exists($this->fields[$key]) && ! (getType($value) === $this->fields[$key])) {
            $value = $this->fields[$key]::from($value);
        }

        if (! ($value instanceof $this->fields[$key]) && ! (getType($value) === $this->fields[$key])) {
            throw new Exception(__('experian::errors.model_types_mismatch', [
                'key'  => $key,
                'type' => $this->fields[$key]
            ]));
        }

        $this->attributes[$key] = $value;
    }

    public static function from($value)
    {
        return new static($value);
    }

    public function fill(array $attributes): self
    {
        $fields =  array_intersect_key($attributes, $this->fields);

        foreach ($fields as $key => $value) {
            if ($this->hasSetMutator($key)) {
                $this->setMutatedAttributeValue($key, $value);
            } else {
                $this->setAttribute($key, $value);
            }
        }

        return $this;
    }

    public function toArray(): array
    {
        return array_map(
            fn ($value) => $value instanceof Arrayable ? $value->toArray() : $value,
            $this->attributes
        );
    }

    public function jsonSerialize()
    {
        return $this->toArray();
    }
}
