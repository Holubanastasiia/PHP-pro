<?php

function index()
{
    require_once __DIR__ . '/../model/users-model.php';

    $users = getUsers();

    include __DIR__ . '/../view/users-view.php';
}

function view(array $params)
{
    echo 'View with id ' . $params['id'];
}

