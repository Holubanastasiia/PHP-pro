<?php

namespace Application\Driver;

use Application\Interfaces\MovableInterface;
use Application\Vehicle;

class Driver
{
    protected string $to;
    protected string $from;

    public function __construct(string $from, string $to)
    {
        $this->from = $from;
        $this->to = $to;
    }

    public function drive(MovableInterface $movable): string
    {
        return $movable->move($this->from, $this->to) . PHP_EOL;
    }
}