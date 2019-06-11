<?php

$word = readline();

function printMiddleChar($word)
{
    $len = strlen($word);
    if ($len % 2 == 0) {
        $middle = round($len / 2);
        echo $word[intval($middle - 1)] . $word[intval($middle)];
    } else if ($len % 2 == 1) {
        $middle = round($len / 2);
        echo $word[intval($middle - 1)];
    }
}

echo printMiddleChar($word);

