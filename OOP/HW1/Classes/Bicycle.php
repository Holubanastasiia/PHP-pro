<?php

require_once __DIR__ . '/Vehicles.php';
//клас наслідує всі методи та властивості абстрактного класу Vehicles, не додаючи свої реалізіції
class Bicycle extends Vehicles
{
    public function __construct(int $maxSpeed)
    {
        parent::__construct($maxSpeed);
    }
}