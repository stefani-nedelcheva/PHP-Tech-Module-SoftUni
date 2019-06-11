<?php

$array = array_map("intval", explode(" ", readline()));
$capacity = intval(readline());

while (true) {
    $input = readline();
    if ($input === "end") {
        break;
    }
    $args = explode(" ", $input);
    if ($args[0] === "Add") {
        $wagon = intval($args[1]);
        if ($wagon <= $capacity) {
            $array[] = $wagon;
        }
    } else {
        $passengers = intval($args[0]);
        $count = count($array);
        for ($i = 0; $i < $count; $i++) {
            if ($array[$i] + $passengers <= $capacity) {
                $array[$i] += $passengers;
                break;
            }
        }
    }
}
echo implode(" ", $array);