<?php

$input = explode(' ', readline());

for ($i = count($input) - 1; $i >= 0; $i--) {
    echo $input[$i] . ' ';
}