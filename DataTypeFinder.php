<?php

$input = readline();

while (true) {
    if ($input == "END") {
        break;
    }
    if (filter_var($input, FILTER_VALIDATE_INT) || $input == "0") {
        echo "$input is integer type\n";
    } else if (filter_var($input, FILTER_VALIDATE_FLOAT)) {
        echo "$input is floating point type\n";
    } else if (filter_var($input, FILTER_VALIDATE_BOOLEAN) || strtolower($input) === "false") {
        echo "$input is boolean type\n";
    } else if (mb_strlen($input) === 1) {
        echo "$input is character type\n";
    } else {
        echo "$input is string type\n";
    }

    $input = readline();
}