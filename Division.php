<?php

$num = intval(readline());
$divide = 0;

if ($num % 2 == 0) {
    $divide = 2;
}
if ($num % 3 == 0) {
    $divide = 3;
}
if ($num % 6 == 0) {
    $divide = 6;
}
if ($num % 7 == 0) {
    $divide = 7;
}
if ($num % 10 == 0) {
    $divide = 10;
}
if ($divide == 0) {
    echo "Not divisible";
} else {
    echo "The number is divisible by $divide" . PHP_EOL;
}