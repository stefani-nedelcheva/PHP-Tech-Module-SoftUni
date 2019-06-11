<?php

$first = ord(readline());
$second = ord(readline());

function inRange($first, $second)
{

    $start = min($first, $second);
    $end = max($first, $second);
    for ($i = ++$start; $i < $end; $i++) {
        echo chr($i) . " ";
    }
}

inRange($first, $second);
