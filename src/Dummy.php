<?php

namespace Dummy;

class Dummy
{
    public const TYPE_PERCENTAGE = 'percentage';

    private string $type;
    private string $unused;

    public function __construct(string $type)
    {
        $this->type = $type;
    }

    public function getType(): string
    {
        return $this->type;
    }

    public function setType(string $type): self
    {
        $this->type = $type;
        return $this;
    }
}