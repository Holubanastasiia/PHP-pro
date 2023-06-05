<?php

use Anastasiia\DbQueryBuilder\Builder\SqlBuilder;

require __DIR__ . '/vendor/autoload.php';

$sqlQueryBuilder = new SqlBuilder();
$query = $sqlQueryBuilder->table('users')
    ->select(['first_name', 'age'])
    ->order(['id' => 'ASC'])
    ->limit(20)
    ->getSql();

echo $query;