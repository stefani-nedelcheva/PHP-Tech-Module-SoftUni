<?php

$countNumbers = intval(readline());

for ($i = 0; $i < $countNumbers; $i++) {
    $array[] = intval(readline());
}

for ($i = $countNumbers - 1; $i >= 0; $i--) {
    echo $array[$i] . " ";
}
