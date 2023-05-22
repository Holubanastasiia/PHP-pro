<?php
require __DIR__ . '/../vendor/autoload.php';

use GuzzleHttp\Client;

$client = new Client();

$response = $client->get('https://itea.ua');

if ($response->getStatusCode() === 200) {
    $body = $response->getBody()->getContents();
    echo $body;
}

