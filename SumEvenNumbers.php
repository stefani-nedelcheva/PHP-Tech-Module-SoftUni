<?php

$numbers = explode(" ", readline());
$sum = 0;

for ($i = 0; $i < count($numbers); $i++) {
    if (intval($numbers[$i]) % 2 == 0) {
        $sum += intval($numbers[$i]);
    }
}
echo $sum;