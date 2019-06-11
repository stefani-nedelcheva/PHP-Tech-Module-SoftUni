<?php

$array1 = explode(" ", readline());
$array2 = explode(" ", readline());

foreach ($array2 as $item) {
    foreach ($array1 as $value) {
        if ($item == $value) {
            echo $item . " ";
        }
    }
}