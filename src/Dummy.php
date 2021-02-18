<?php

namespace Dummy;

class Dummy
{
    public const TYPE_PERCENTAGE = 'percentage';

    private string $type;

    public function __construct(string $type)
    {
        $this->type = $type;
    }

    public function getType(): string
    {
        return $this->type;
    }
}