<?php

$n = intval(readline());
$guests = [];

for ($i = 0; $i < $n; $i++) {
    $tokens = explode(" ", readline());
    if ($tokens[2] !== "not") {
        $name = $tokens[0];
        if (array_search($name, $guests) === false) {
            $index = array_search($name, $guests);
            array_splice($guests, $index + 1, 0, $name);
        } else {
            echo "$name is already in the list!\n";
        }
    } else if ($tokens[2] === "not") {
        $name = $tokens[0];
        if (array_search($name, $guests) !== false) {
            $index = array_search($name, $guests);
            array_splice($guests, $index, 1);
        } else {
            echo "$name is not in the list!\n";
        }
    }
}
foreach ($guests as $guest) {
    echo $guest . PHP_EOL;
}