<?php

namespace Application\VehiclesParts;

class Engine
{
private float|int $engineCapacity;

public function showEngineCapacity(): string
{
    return 'Engine - ' . $this->engineCapacity . ' cu.';
}

}