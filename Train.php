<?php

$n = intval(readline());
$sum = 0;


for ($i = 0; $i < $n; $i++) {
    $array[] = intval(readline());
}
for ($i = 0; $i < $n; $i++) {
    echo $array[$i] . " ";
    $sum += $array[$i];
}
echo PHP_EOL;
echo $sum;
