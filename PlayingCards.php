<?php

$cards = [];

while (true) {
    $input = readline();
    if ($input === "JOKER") {
        break;
    }
    $tokens = explode(": ", $input);
    $name = $tokens[0];
    $pT = explode(", ", $tokens[1]);
    $count = count($pT);
    $totalSum = 0;

    for ($i = 0; $i < $count; $i++) {
        $power = $pT[$i][0];
        $type = $pT[$i][1];
        $cardValue = 0;
        $typeValue = 0;
        $result = 0;
        switch ($power) {
            case "2":
                $cardValue = 2;
                break;
            case "3":
                $cardValue = 3;
                break;
            case "4":
                $cardValue = 4;
                break;
            case "5":
                $cardValue = 5;
                break;
            case "6":
                $cardValue = 6;
                break;
            case "7":
                $cardValue = 7;
                break;
            case "8":
                $cardValue = 8;
                break;
            case "9":
                $cardValue = 9;
                break;
            case "10":
                $cardValue = 10;
                break;
            case "J":
                $cardValue = 11;
                break;
            case "Q":
                $cardValue = 12;
                break;
            case "K":
                $cardValue = 13;
                break;
            case "A":
                $cardValue = 14;
                break;
        }
        switch ($type) {
            case "S":
                $typeValue = 4;
                break;
            case "H":
                $typeValue = 3;
                break;
            case "D":
                $typeValue = 2;
                break;
            case "C":
                $typeValue = 1;
                break;
        }
        $result += ($cardValue * $typeValue);
//        $totalSum += $result;
        if (!key_exists($name, $cards)) {
            $cards[$name] = $result;
        } else {
            if (!in_array($pT[$i], $cards)) {
                $cards[$name] = $result;
            }
        }
    }
}

foreach ($cards as $person => $cardVal) {
    echo "$person: ";
//    foreach ($cardVal as $value) {
    echo $cardVal . PHP_EOL;
//    }
}