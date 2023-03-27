<?php
function fact($n) : int
{
    if ($n <= 0) {
        return 1;
    }
    return $n * fact ($n-1);
}
$res = fact(5);
echo 'Факториал числа n = ' . $res;