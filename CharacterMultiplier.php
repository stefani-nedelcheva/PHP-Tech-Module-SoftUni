<?php

$words = explode(" ", readline());
$word1 = $words[0];
$word2 = $words[1];
$shorter = 0;
$longer = 0;
$sum = 0;

if (strlen($word1) > strlen($word2)) {
    $longer = $word1;
    $shorter = $word2;
} else {
    $longer = $word2;
    $shorter = $word1;
}
for ($i = 0; $i < strlen($shorter); $i++) {
    $sum += ord($shorter[$i]) * ord($longer[$i]);
}
for ($i = strlen($shorter); $i < strlen($longer); $i++) {
    $sum += ord($longer[$i]);
}
echo $sum;