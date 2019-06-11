<?php

$array = array_map("intval", explode(" ", readline()));
$magicNum = intval(readline());

for ($i = 0; $i < count($array); $i++) {
    for ($j = $i + 1; $j < count($array); $j++) {
        if ($array[$i] + $array[$j] == $magicNum) {
            echo $array[$i] . " " . $array[$j] . PHP_EOL;
        }
    }
}