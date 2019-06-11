<?php

$number = readline();

$sum = 0;

for ($i = 0; $i < strlen($number); $i++) {
    $factorial = 1;
    for ($j = 1; $j <= intval($number[$i]); $j++) {
        $factorial *= $j;

    }
    $sum += $factorial;
}

if ($sum == intval($number)) {
    echo "yes";
} else {
    echo "no";
}
