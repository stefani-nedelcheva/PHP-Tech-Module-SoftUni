<?php

function signOfInteger()
{
    $num = intval(readline());
    if ($num < 0) {
        echo "The number $num is negative.";
    } else if ($num == 0) {
        echo "The number $num is zero.";
    } else if ($num > 0) {
        echo "The number $num is positive.";
    }
}
signOfInteger();