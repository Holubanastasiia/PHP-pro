<?php
function sortStringItems(string $string, string $delimiter = ',') : string
{
    $arr = explode($delimiter, mb_strtolower($string));
    sort($arr);
    return implode(',',  $arr);
}
$countries = 'USA, Moldova, Poland, Ukraine';

$res = sortStringItems($countries);
var_dump($res);
