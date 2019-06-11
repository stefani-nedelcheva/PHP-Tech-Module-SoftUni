<?php

//$n = intval(readline());
//
//$arr1 = [];
//$arr2 = [];
//
//for ($i = 0; $i < $n; $i++) {
//    $input = explode(" ", readline());
//    for ($j = 0; $j < count($input) - 1; $j++) {
//        $arr2[$i] = $input[$j];
//        $arr1[$i] = $input[$j + 1];
//    }
//}
//
//for ($i = 0; $i < $n; $i += 2) {
//    $temp = 0;
//    $temp = $arr2[$i];
//    $arr2[$i] = $arr1[$i];
//    $arr1[$i] = $temp;
//}
//
//$first = implode(" ", $arr1);
//$second = implode(" ", $arr2);
//
//echo $first . PHP_EOL;
//echo $second;

$count = intval(readline());

$arr1 = [];
$arr2 = [];

for ($i = 0; $i < $count; $i++) {
    $tokens = explode(" ", readline());
    $element1 = $tokens[0];
    $element2 = $tokens[1];

    if ($i % 2 == 0) {
        $arr1[$i] = $element1;
        $arr2[$i] = $element2;
    } else {
        $arr1[$i] = $element2;
        $arr2[$i] = $element1;
    }
}
echo implode(" ", $arr1);
echo PHP_EOL;
echo implode(" ", $arr2);