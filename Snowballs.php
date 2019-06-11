<?php

$count = intval(readline());

$bestSnowballSnow = 0;
$bestSnowballTime = 0;
$bestSnowballQuality = 0;
$bestSnowballValue = 0;

for ($i = 0; $i < $count; $i++) {
    $snowballSnow = readline();
    $snowballTime = readline();
    $snowballQuality = readline();

    $currentValue = bcpow(($snowballSnow / $snowballTime), $snowballQuality);

    if ($currentValue > $bestSnowballValue) {
        $bestSnowballSnow = $snowballSnow;
        $bestSnowballTime = $snowballTime;
        $bestSnowballQuality = $snowballQuality;
        $bestSnowballValue = $currentValue;
    }
}
echo "$bestSnowballSnow : $bestSnowballTime = $bestSnowballValue ($bestSnowballQuality)";