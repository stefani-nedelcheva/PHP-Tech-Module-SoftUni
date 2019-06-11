<?php

$array = explode(" ", readline());
$rotations = intval(readline());

$size = count($array);

for ($i = 0; $i < $rotations; $i++) {
    $first = $array[0];
    for ($j = 0; $j < $size - 1; $j++) {
        $array[$j] = $array[$j + 1];
    }
    $array[$size - 1] = $first;
}
echo implode(" ", $array);