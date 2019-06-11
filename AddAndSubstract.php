<?php

$num1 = intval(readline());
$num2 = intval(readline());
$num3 = intval(readline());

function addAndSubtract($num1, $num2, $num3)
{
    $sum = $num1 + $num2;
    $sum -= $num3;
    return $sum;

}

echo addAndSubtract($num1, $num2, $num3);