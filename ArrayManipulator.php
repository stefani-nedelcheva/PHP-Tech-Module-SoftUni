<?php

$array = explode(" ", readline());
$count = count($array);

while (true) {
    $input = readline();
    if ($input == 'end') {
        break;
    }
    $tokens = explode(" ", $input);
    $command = $tokens[0];

    switch ($command) {
        case "exchange":
            $index = $tokens[1];
            if ($index >= 0 && $index < $count) {
                $array = exchange($array, $index);
            } else {
                echo "Invalid index\n";
            }
            break;
        case "max":
            $type = $tokens[1];
            printMax($array, $type);
            break;
        case "min":
            $type = $tokens[1];
            printMin($array, $type);
            break;
        case "first":
            $num = (int)$tokens[1];
            if ($num >= 0 && $num <= $count) {
                $type = $tokens[2];
                printFirst($array, $num, $type);
            } else {
                echo "Invalid count\n";
            }
            break;
        case "last":
            $num = (int)$tokens[1];
            if ($num >= 0 && $num <= $count) {
                $type = $tokens[2];
                printLast($array, $num, $type);
            } else {
                echo "Invalid count\n";
            }
            break;
    }
}
echo "[" . implode(", ", $array) . "]";

function exchange(array $arr, int $index): array
{
    $count = count($arr);
    $tempArr = [];

    for ($i = $index + 1; $i < $count; $i++) {
        $tempArr = $arr[$i];
    }

    for ($i = 0; $i <= $index; $i++) {
        $tempArr = $arr[$i];
    }
    return $tempArr;
}

function printMax(array $arr, string $type): void
{
    $result = "No matches";
    $count = count($arr);
    $maxNum = PHP_INT_MIN;

    if ($type == "even") {
        for ($i = 0; $i < $count; $i++) {
            $current = $arr[$i];
            if ($current % 2 === 0 && $current >= $maxNum) {
                $maxNum = $current;
                $result = $i;
            }
        }
    } else if ($type == "odd") {
        for ($i = 0; $i < $count; $i++) {
            $current = $arr[$i];
            if ($current % 2 === 1 && $current >= $maxNum) {
                $maxNum = $current;
                $result = $i;
            }
        }
    }
    echo $result . PHP_EOL;
}

function printMin(array $arr, string $type): void
{
    $result = "No matches";
    $count = count($arr);
    $minNum = PHP_INT_MAX;

    if ($type == "even") {
        for ($i = 0; $i < $count; $i++) {
            $current = $arr[$i];
            if ($current % 2 === 0 && $current <= $minNum) {
                $minNum = $current;
                $result = $i;
            }
        }
    } else if ($type == "odd") {
        for ($i = 0; $i < $count; $i++) {
            $current = $arr[$i];
            if ($current % 2 === 1 && $current <= $minNum) {
                $minNum = $current;
                $result = $i;
            }
        }
    }
    echo $result . PHP_EOL;
}

function printFirst(array $arr, int $number, string $type): void
{
    $tempArr = [];
    $count = count($arr);
    if ($type === "even") {
        for ($i = 0; $i < $count; $i++) {
            $current = $arr[$i];
            if ($current % 2 === 0 && $number > 0) {
                $number--;
                $tempArr[] = $current;
            }
        }
    } else if ($type === "odd") {
        for ($i = 0; $i < $count; $i++) {
            $current = $arr[$i];
            if ($current % 2 === 1 && $number > 0) {
                $number--;
                $tempArr[] = $current;
            }
        }
    }
    if (count($tempArr) > 0) {
        echo "[" . implode(", ", $tempArr) . "]\n";
    } else {
        echo "[]\n";
    }
}

function printLast(array $arr, int $number, string $type): void
{
    $tempArr = [];
    $count = count($arr);
    if ($type === "even") {
        for ($i = $count - 1; $i >= 0; $i--) {
            $current = $arr[$i];
            if ($current % 2 === 0 && $number > 0) {
                $number--;
                $tempArr[] = $current;
            }
        }
    } else if ($type === "odd") {
        for ($i = $count - 1; $i >= 0; $i--) {
            $current = $arr[$i];
            if ($current % 2 === 1 && $number > 0) {
                $number--;
                $tempArr[] = $current;
            }
        }
    }
    if (count($tempArr) > 0) {
        echo "[" . implode(", ", array_reverse($tempArr)) . "]\n";
    } else {
        echo "[]\n";
    }
}