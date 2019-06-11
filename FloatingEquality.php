<?php

$num1 = readline();
$num2 = readline();

if (abs($num1 - $num2) < 0.000001) {
    echo "True";
} else {
    echo "False";
}