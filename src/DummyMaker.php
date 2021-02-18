<?php

namespace Dummy;

class DummyMaker
{
    public function make(): Dummy
    {
        return new Dummy(Dummy::TYPE_PERCENTAGE);
    }
}