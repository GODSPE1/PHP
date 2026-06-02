<?php

use LDAP\Result;

function add(int $x, int $y) {
    return $x + $y;
};
$result = add(10, 4);
$result = add(10.3, 4.5);
$result = add(10.3, '4.5');
// echo $result;



function multiply(int $x, int $y) {
    return $x * $y;
};
// $multiply_result = multiply(10, 4);
var_dump(multiply(10.3, 4.5));
// $result = add(10.3, 4.5);
// $result = add(10.3, '4.5');
// echo $multiply_result;


function add1($x, $y): int | float
{
    return $x * $y;
}

var_dump(add1(10, 20));
var_dump(add1(1.5, 2.5));
?>