<?php

$array = explode(" ", readline());
$longest = [];
$maxCount = 1;
$best = 0;

for ($i = 0; $i < count($array); $i++) {
    $count = 1;
    for ($j = $i + 1; $j < count($array); $j++) {
        if ($array[$i] == $array[$j]) {
            $count++;
            if ($count > $maxCount) {
                $maxCount = $count;
                $best = $array[$i];
            }
        } else {
            break;
        }
    }
}
for ($i = 0; $i < $maxCount; $i++) {
    echo "$best ";
}