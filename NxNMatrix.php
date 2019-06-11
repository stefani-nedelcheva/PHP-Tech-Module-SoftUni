<?php

$num = intval(readline());

function matrix($num)
{
    for ($i = 0; $i < $num; $i++) {
        for ($j = 0; $j < $num; $j++) {
            echo $num . " ";
        }
        echo PHP_EOL;
    }
}

echo matrix($num);
