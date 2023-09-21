<?php

namespace App\ArrayCounter;

class NestedArrayCounter
{
    public function __construct(private readonly string $field)
    {
    }

    public function countForArray(array $input): int
    {
        return array_count_values(array_merge(...array_values($input)))[$this->field] ?? 0;
    }
}