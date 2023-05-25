<?php
require './vendor/autoload.php';

$result = new \Anastasiia\Calculator\Calculator();

try {
    echo $result->divide(24, 4);
} catch (\Anastasiia\Calculator\Exceptions\DivideByZeroException $e) {
    echo $e;
}