<?php

$array = explode(" ", readline());
$rightSum = 0;
$leftSum = 0;

for ($i = 0; $i < count($array); $i++) {
    if (count($array) == 1) {
        echo "0";
        return;
    }
    $leftSum = 0;
    for ($j = $i; $j > 0; $j--) {
        $nextPos = ($j - 1);
        if ($j > 0) {
            $leftSum += $array[$nextPos];
        }
    }
    $rightSum = 0;
    for ($k = $i; $k < count($array); $k++) {
        $nextPos = ($k + 1);
        if ($k < (count($array) - 1)) {
            $rightSum += $array[$nextPos];
        }
    }
    if ($leftSum == $rightSum) {
        echo $i;
        return;
    }
}
echo "no";