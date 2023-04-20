<?php

function getConnection()
{
    static $connection;
    if ($connection === null) {
        $config = parse_ini_file(__DIR__ . '/../config/db.ini');
        $connection = mysqli_connect($config['host'], $config['username'], $config['password'], $config['database']);
    }
    return $connection;
}