<?php

$array = explode(" ", readline());
$sum = 0;

foreach ($array as $value) {
    $revVal = strrev($value);
    $sum += intval($revVal);
}
echo $sum;