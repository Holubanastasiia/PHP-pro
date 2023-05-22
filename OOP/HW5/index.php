<?php
require __DIR__ . '/../vendor/autoload.php';

use GuzzleHttp\Client;

$client = new Client();

$response = $client->get('https://itea.ua');
$body = $response->getBody()->getContents();

echo $body;
