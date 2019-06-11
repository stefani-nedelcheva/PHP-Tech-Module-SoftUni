<?php

$input = readline();
$chars = "";
$chars .= $input[0];

for ($i = 0; $i < strlen($input) - 1; $i++) {
    if (strlen($input) > 1) {
        if ($input[$i] != $input[$i + 1]) {
            $chars .= $input[$i + 1];
        }
    }
}
echo $chars;