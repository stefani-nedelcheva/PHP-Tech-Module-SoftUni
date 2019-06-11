<?php

$n = intval(readline());
$a = '';
$res = 0;
$b = [];
for ($k = 1; $k <= $n; $k++) {
    $a .= "$k ";
}

$b = explode(" ", $a);

foreach ($b as $i) {
    $oddDigit = false;
    $res = sum($i, $oddDigit);
    $i = (int)$i;
    if ($oddDigit) {
        if ($res % 8 == 0) {
            echo $i . PHP_EOL;
        }
    }
}

function sum($num, &$oddDigit)
{
    $sum = 0;
    for ($i = 0; $i < strlen($num); $i++) {
        $sum += $num[$i];
        if ($num[$i] % 2 != 0) {
            $oddDigit = true;
        }
    }
    return (int)$sum;
}

//$number = intval(readline());
//
//function checkIfTopNumber(int $number)
//{
//    for ($i = 1; $i <= $number; $i++) {
//        $sum = 0;
//        $oddDigit = false;
//        $n = $i;
//        while (true) {
//            if ($n == 0) {
//                break;
//            }
//            $right = $n % 10;
//            $sum += $right;
//            if (!$right % 2 == 0) {
//                $oddDigit = true;
//                $n /= 10;
//            }
//        }
//        if ($sum % 8 == 0 && $oddDigit == true) {
//            echo $i . PHP_EOL;
//        }
//    }
//}
//echo checkIfTopNumber($number);