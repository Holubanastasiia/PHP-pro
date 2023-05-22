<?php

include 'autoloader.php';

use Application\Vehicles\Cars\Car;
use \Application\Driver\Driver;
use \Application\VehiclesParts\Wheel;

$ferrari = new Car(320, Car::COUNTRY_ITALY);

$wheel1 = new Wheel(22);
$wheel2 = new Wheel(22);
$wheel3 = new Wheel(24);
$wheel4 = new Wheel(24);

echo $ferrari->start();

$ferrari->addWheel($wheel1);
$ferrari->addWheel($wheel2);
$ferrari->addWheel($wheel3);
$ferrari->addWheel($wheel4);

$ferrari->printWheelInfo();

$driver = new Driver('Berdichiv', 'Kyiv');

echo $driver->drive($ferrari);
//echo $ferrari->productionCountry . PHP_EOL;
//echo $carCount = Car::getCount() . PHP_EOL;



