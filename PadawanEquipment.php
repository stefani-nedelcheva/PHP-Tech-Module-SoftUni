<?php

$budget = floatval(readline());
$students = intval(readline());
$priceLightSaber = floatval(readline());
$priceRobe = floatval(readline());
$priceBelt = floatval(readline());

$lightSaberCount = ceil($students * 1.1);
$freeBelts = floor($students / 6);
$robesPrice = $students * $priceRobe;
$lightSabersPrice = $lightSaberCount * $priceLightSaber;
$beltsPrice = ($students - $freeBelts) * $priceBelt;

$total = $lightSabersPrice + $beltsPrice + $robesPrice;
$total = number_format($total, 2, '.', '');


if ($budget >= $total) {
    echo "The money is enough - it would cost $total" . "lv.";
} else {
    $priceDiff = number_format(($total - $budget), 2, '.', '');
    echo "Ivan Cho will need $priceDiff" . "lv more.";
}
