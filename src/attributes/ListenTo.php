<?php

namespace app\attributes;

#[\Attribute(\Attribute::TARGET_METHOD)]
class ListenTo
{
    public string $event;

    public function __construct(string $event)
    {
        $this->event = $event;
    }
}
