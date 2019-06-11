<?php

$batch = intval(readline());
$total = 0;

for ($i = 0; $i < $batch; $i++) {
    $flourGrams = intval(readline());
    $sugarGrams = intval(readline());
    $cocoaGrams = intval(readline());

    $flourCups = intval($flourGrams / 140);
    $sugarSpoons = intval($sugarGrams / 20);
    $cocoaSpoons = intval($cocoaGrams / 10);

    $min = min($flourCups, $sugarSpoons, $cocoaSpoons);

    $totalCookies = intval(170 * $min / 25);
    $currentBatch = intval($totalCookies / 5);

    if ($currentBatch >= 1) {
        $total += $currentBatch;
        echo "Boxes of cookies: $currentBatch" . PHP_EOL;
    } else {
        echo "Ingredients are not enough for a box of cookies." . PHP_EOL;
    }
}

echo "Total boxes: $total" . PHP_EOL;