<?php

namespace CustomD\LaravelExperian\Requests\Contracts;

interface ExperianRequest
{
    public function toUrl(): string;
    public function toArray(): array;
}
