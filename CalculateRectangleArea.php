<?php

$width = floatval(readline());
$height = floatval(readline());

function calcRectangleArea($width, $height): float
{
    return $width * $height;
}

$area = calcRectangleArea($width, $height);
echo $area;
