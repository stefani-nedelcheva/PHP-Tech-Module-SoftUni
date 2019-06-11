<?php

$rad = floatval(readline());

$area = number_format((pi() * $rad * $rad), 12, '.', '');

echo $area;