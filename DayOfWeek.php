<?php

$num = readline();

$days = ["Invalid Day!", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday", "Sunday"];

if ($num >= 1 && $num <= 7) {
    echo $days[$num];
} else {
    echo $days[0];
}