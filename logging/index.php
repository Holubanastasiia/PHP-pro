<?php

require 'vendor/autoload.php';

use Anastasiia\Logger\FileWriter\FileWriter;
use Anastasiia\Logger\Formatter\Formatter;
use Anastasiia\Logger\Logger;


$formatter = new Formatter();
$writer = new FileWriter(__DIR__ . '/logs/log.txt', $formatter);
$logger = new Logger($writer);


$logger->log('log','Some messпарage1', ['context', 'another_context']);
$logger->debug('Some message1', ['context', 'another_context']);
