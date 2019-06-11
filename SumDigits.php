<?php

$num = readline();
$sum = 0;

for ($i = 0; $i < strlen($num); $i++) {
    $current = $num[$i];
    $sum += $current;
}
echo $sum;