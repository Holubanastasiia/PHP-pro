<?php

namespace Application\VehiclesParts;

class Wheel
{
    private  int|float $diameter;

    public function __construct($diameter) {
        $this->diameter = $diameter;
    }
    public function getDiameter()
    {
        return $this->diameter;
    }
}