<?php

$num1 = intval(readline());
$num2 = intval(readline());
$sum = 0;

for ($i = $num1; $i <= $num2; $i++) {
    echo "$i ";
    $sum += $i;
}

echo PHP_EOL;
echo "Sum: $sum";