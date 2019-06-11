<?php

$a = intval(readline());
$b = intval(readline());
$c = intval(readline());

$min = min($a, $b, $c);
$max = max($a, $b, $c);

$mid = ($a + $b + $c) - $min - $max;

echo $max . PHP_EOL;
echo $mid . PHP_EOL;
echo $min . PHP_EOL;