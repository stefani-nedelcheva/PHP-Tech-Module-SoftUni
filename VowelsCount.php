<?php

function countVowels()
{
    $s = strtolower(readline());
    $count = 0;
    for ($i = 0; $i < strlen($s); $i++) {
        $current = $s[$i];
        switch ($current) {
            case "a":
            case "e":
            case "i":
            case "o":
            case "u":
                $count++;
                break;
            default:
                break;
        }
    }
    return $count;
}

echo countVowels();