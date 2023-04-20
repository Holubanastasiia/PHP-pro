<?php

require_once __DIR__ . '/db.php';

function getUsers()
{
    $connection = getConnection();
    $result = mysqli_query($connection, "SELECT * FROM users");

    return mysqli_fetch_all($result, MYSQLI_ASSOC);

    /*return [
        [
            'id' => 1,
            'first_name' => 'John',
            'age' => 23,
            'address' => 'new york'
        ]
    ];*/
}