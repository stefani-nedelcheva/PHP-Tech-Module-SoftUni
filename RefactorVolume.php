<?php

$length = floatval(readline());
$width = floatval(readline());
$height = floatval(readline());

$volume = ($length * $width * $height) / 3;
echo "Length: ";
echo "Width: ";
echo "Height: ";
echo sprintf("Pyramid Volume: %.2f", $volume) . PHP_EOL;
