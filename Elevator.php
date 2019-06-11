<?php

$numOfPeople = intval(readline());
$capacity = intval(readline());
$result = ceil($numOfPeople / $capacity);

echo $result;
