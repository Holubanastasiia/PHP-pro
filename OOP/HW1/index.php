<?php
include __DIR__ . '/Classes/Car.php';
include __DIR__ . '/Classes/Bicycle.php';

$ferrari = new Car(320);

echo $ferrari->start();
echo $ferrari->up(50);
echo $ferrari->up(150);
echo $ferrari->down(60);
echo $ferrari->stop();

$bicycle = new Bicycle(60);

echo $bicycle->start();
echo $bicycle->up(60);
echo $bicycle->down(40);
