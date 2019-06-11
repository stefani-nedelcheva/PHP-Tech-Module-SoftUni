<?php

$command = readline();

function checkIfPalindrome(string $command)
{
    while ($command !== "END") {
        if ($command == "END") {
            break;
        }
        if ($command === strrev($command)) {
            echo "true" . PHP_EOL;
        } else {
            echo "false" . PHP_EOL;
        }
        $command = readline();
    }
}

echo checkIfPalindrome($command);
