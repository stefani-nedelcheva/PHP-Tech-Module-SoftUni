<?php

$n = intval(readline());

for ($i = 0; $i < $n; $i++) {
    $command = readline();
    if ($command == 0) {
        echo " ";
    } else {
        $currentDigit = $command[0];
        if ($currentDigit == 8 || $currentDigit == 9) {
            $character = ($currentDigit - 2) * 3 + (strlen($command));
            $toPrint = chr($character + 97);
            echo $toPrint;
        } else {
            $character = ($currentDigit - 2) * 3 + (strlen($command) - 1);
            $toPrint = chr($character + 97);
            echo $toPrint;
        }
    }
}