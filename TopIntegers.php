<?php

$array = explode(" ", readline());
$topIntegers = [];

$count = count($array);
for ($i = 0; $i < $count; $i++) {
    $isTop = true;
    for ($j = $i + 1; $j < $count; $j++) {
        if ($array[$i] <= $array[$j]) {
            $isTop = false;
            break;
        }
    }
    if ($isTop) {
        $topIntegers[] = $array[$i];
    }
}

echo implode(" ", $topIntegers);