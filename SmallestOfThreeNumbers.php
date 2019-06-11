<?php

$num1 = intval(readline());
$num2 = intval(readline());
$num3 = intval(readline());


function smallestOfThree($num1, $num2, $num3)
{
    $min = min($num1, $num2, $num3);
    return $min;
}

echo smallestOfThree($num1, $num2, $num3);
