<?php

$numbers = array_map("floatval", explode(" ", readline()));

for ($i = 0; $i < count($numbers); $i++) {
    echo number_format($numbers[$i], 2, '.', '') . " => " . round(floatval($numbers[$i]), 0, PHP_ROUND_HALF_UP) . PHP_EOL;
}