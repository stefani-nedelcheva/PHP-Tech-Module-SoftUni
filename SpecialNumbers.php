<?php

$n = intval(readline());

for ($i = 1; $i <= $n; $i++) {

    $sum = 0;
    $digits = $i;

    while ($digits > 0) {
        $sum += $digits % 10;
        $digits /= 10;
    }

    if ($sum == 5 || $sum == 7 || $sum == 11) {
        echo $i . " -> " . "True" . PHP_EOL;
    } else {
        echo $i . " -> " . "False" . PHP_EOL;
    }
}
