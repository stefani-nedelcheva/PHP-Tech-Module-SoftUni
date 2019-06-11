<?php

$array = array_map("intval", explode(" ", readline()));

while (true) {
    $input = readline();
    if ($input === "end") {
        break;
    }
    $firstDigit = $input[0];
    array_splice($array, $firstDigit, 0, $input);
}

echo implode(" ", $array);