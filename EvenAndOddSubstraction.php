<?php

$numbers = array_map("intval", explode(" ", readline()));
$sumEven = 0;
$sumOdd = 0;

foreach ($numbers as $number) {
    if ($number % 2 == 0) {
        $sumEven += $number;
    } else {
        $sumOdd += $number;
    }
}
$sum = $sumEven - $sumOdd;
echo $sum;