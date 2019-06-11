<?php

$numberArr = array_map("intval", explode(" ", readline()));
$bombPower = array_map("intval", explode(" ", readline()));
$sum = 0;

for ($i = 0; $i < count($numberArr); $i++) {
    if ($numberArr[$i] == $bombPower[0]) {
        for ($j = 1; $j <= $bombPower[1]; $j++) {
            if ($i - $j < 0) {
                break;
            } else {
                $numberArr[$i - $j] = 0;
            }
        }
        for ($j = 1; $j <= $bombPower[1]; $j++) {
            if ($i + $j > count($numberArr) - 1) {
                break;
            } else {
                $numberArr[$i + $j] = 0;
            }
        }
        $numberArr[$i] = 0;
    }
}
$sum = array_sum($numberArr);
echo $sum;