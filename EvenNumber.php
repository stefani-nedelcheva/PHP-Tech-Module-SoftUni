<?php


while (true) {
    $number = intval(readline());
    if ($number % 2 == 0) {
        echo "The number is: " . abs($number);
        break;
    } else {
        echo "Please write an even number." . PHP_EOL;
    }
}
