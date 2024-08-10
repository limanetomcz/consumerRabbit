<?php

namespace Consumer\Interfaces;

interface QueueConsumerInterface
{
    public function consume(): void;
}
