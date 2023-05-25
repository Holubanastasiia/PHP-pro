<?php

spl_autoload_register(function($className) {
    $rootDir = 'src';
    $namespaceParts = explode('\\', $className);
    $rootNamespace = $namespaceParts[0];

    $filename = str_replace('\\', '/', $className);
    $filename = str_replace($rootNamespace, $rootDir, $filename);

    if (file_exists($filename .  '.php')) {
        require_once $filename . '.php';
    }

});

use src\Vehicles\Bicycles\Bicycle;
use src\Vehicles\Cars\Car;

$ferrari = new Car(320);

//echo $ferrari->start();
//echo $ferrari->up(50);
//echo $ferrari->up(150);
//echo $ferrari->down(60);
//echo $ferrari->stop();

$bicycle = new Bicycle(60);

//echo $bicycle->start();
//echo $bicycle->up(60);
//echo $bicycle->down(40);
//echo Bicycle::$counter;

echo $bicycleCount = Bicycle::getCount() . PHP_EOL;
echo $carCount = Car::getCount() . PHP_EOL;



