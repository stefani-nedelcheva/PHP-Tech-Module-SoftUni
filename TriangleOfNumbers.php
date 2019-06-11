<?php

$num = intval(readline());

for ($row = 1; $row <= $num; $row++) {
    for ($col = 1; $col <= $row; $col++) {
        echo "$row ";
    }
    echo PHP_EOL;
}