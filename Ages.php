<?php

$age = intval(readline());

switch ($age) {
    case ($age > 0 && $age <= 2):
        echo "baby";
        break;
    case ($age >= 3 && $age <= 13):
        echo "child";
        break;
    case ($age >= 14 && $age <= 19):
        echo "teenager";
        break;
    case ($age >= 20 && $age <= 65):
        echo "adult";
        break;
    case ($age >= 66):
        echo "elder";
        break;
}