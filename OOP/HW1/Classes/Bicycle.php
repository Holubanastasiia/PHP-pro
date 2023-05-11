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

$bicycle = new Bicycle(60);

echo $bicycle->start();
echo $bicycle->up(60);
echo $bicycle->down(40);