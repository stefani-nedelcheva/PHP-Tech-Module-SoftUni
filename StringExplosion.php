<?php

$input = readline();
$charArr = str_split($input);
$power = 0;
$result = "";
$isPunch = false;

for ($i = 0; $i < count($charArr); $i++) {
    if ($charArr[$i] == ">") {
        $isPunch = true;
        continue;
    }
    if ($isPunch) {
        $power += $charArr[$i];
        $isPunch = false;
    }
    if ($power > 0) {
        $charArr[$i] = "0";
        $power--;
    }
}
foreach ($charArr as $char) {
    if ($char != "0") {
        $result .= $char;
    }
}
echo $result;
