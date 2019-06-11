<?php

while (true) {
    $input = readline();
    if ($input === "Last note") {
        break;
    }
    $pattern = '/^(?<name>[A-Za-z0-9!@#$\?]+)(?<length>=[0-9]+)(?<hashcode><<.*)$/';
    $resultName = '';
    $resultHash = '';

    if (preg_match($pattern, $input, $matches)) {

        $name = array_filter(preg_split("/[!,@,#,$,?]/", $matches['name']));
        $resultName = implode("", $name);
        $length = array_filter(preg_split("/[=]/", $matches['length']));
        $resultLength = implode("", $length);
        $hashCode = array_filter(preg_split("/[<<]/", $matches['hashcode']));
        $resultHash = implode("", $hashCode);

        if (strlen($resultHash) === intval($resultLength)) {
            echo "Coordinates found! $resultName -> $resultHash\n";
            continue;
        } else {
            echo "Nothing found!\n";
            continue;
        }
    } else {
        echo "Nothing found!\n";
        continue;
    }
}