<?php
include __DIR__ . '/Classes/Car.php';
include __DIR__ . '/Classes/Bicycle.php';

use \Vehicles\Cars\Car;
use \Vehicles\Bicycles\Bicycle;

$ferrari = new Car(320, Car::COUNTRY_ITALY);
$volkswagen = new Car(360, Car::COUNTRY_GERMANY);

echo $ferrari->getCountry();
echo $volkswagen->getCountry();

//echo $ferrari->start();
//echo $ferrari->up(50);
//echo $ferrari->up(150);
//echo $ferrari->down(60);
//echo $ferrari->stop();

$bicycle = new Bicycle(60);
$bicycle1 = new Bicycle(60);
$bicycle2 = new Bicycle(40);

//echo $bicycle->start();
//echo $bicycle->up(60);
//echo $bicycle->down(40);
//echo Bicycle::$counter;

echo $bicycleCount = Bicycle::getCount() . PHP_EOL;
echo $carCount = Car::getCount() . PHP_EOL;
