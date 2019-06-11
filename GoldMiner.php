<?php

$array = [];
$input = readline();

while ($input !== "stop") {

    $karats = intval(readline());
    if (key_exists($input, $array)) {
        $array[$input] += $karats;
    } else {
        $array[$input] = $karats;
    }
    $input = readline();
}

foreach ($array as $key => $value) {
    echo $key . " -> " . $value . "K" . PHP_EOL;
}