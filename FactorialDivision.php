<?php

$num1 = intval(readline());
$num2 = intval(readline());

function factorialDivision(int $num1, int $num2)
{
    $factorial = 1;
    for ($i = 1; $i <= $num1; $i++) {
        $factorial = $factorial * $i;
    }
    $fact = 1;
    for ($i = 1; $i <= $num2; $i++) {
        $fact = $fact * $i;
    }
    $division = $factorial / $fact;
    return number_format($division, 2, '.', '');
}

echo factorialDivision($num1, $num2);