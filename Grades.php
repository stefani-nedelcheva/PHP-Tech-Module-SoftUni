<?php

$grade = floatval(readline());

function printWords($grade)
{
    if ($grade >= 2.00 && $grade <= 2.99) {
        echo "Fail";
    } else if ($grade >= 3.00 && $grade <= 3.49) {
        echo "Poor";
    } else if ($grade >= 3.50 && $grade <= 4.49) {
        echo "Good";
    } else if ($grade >= 4.50 && $grade <= 5.49) {
        echo "Very good";
    } else if ($grade >= 5.50 && $grade <= 6.00) {
        echo "Excellent";
    }
}

printWords($grade);