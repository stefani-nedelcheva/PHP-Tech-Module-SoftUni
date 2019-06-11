<?php

$lostGames = intval(readline());
$headsetPrice = floatval(readline());
$mousePrice = floatval(readline());
$keyboardPrice = floatval(readline());
$displayPrice = floatval(readline());

$headsetCount = 0;
$mouseCount = 0;
$keyboardCount = 0;
$displayCount = 0;

while ($lostGames > 0) {
    if ($lostGames % 2 == 0) {
        $headsetCount++;
    }
    if ($lostGames % 3 == 0) {
        $mouseCount++;
    }
    if ($lostGames % 6 == 0) {
        $keyboardCount++;
    }
    if ($lostGames % 12 == 0) {
        $displayCount++;
    }
    $lostGames--;
}

$total = ($headsetPrice * $headsetCount) + ($mousePrice * $mouseCount) + ($keyboardPrice * $keyboardCount) + ($displayPrice * $displayCount);

printf("Rage expenses: %.2f lv.", $total);