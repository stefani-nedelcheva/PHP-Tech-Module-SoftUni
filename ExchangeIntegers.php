<?php

$a = readline();
$b = readline();

echo "Before:\na = $a\nb = $b\n";
$temp = $a;
$a = $b;
$b = $temp;

echo "After:\na = $a\nb = $b\n";