<?php

$lessons = explode(", ", readline());

while (true) {
    $input = readline();
    if ($input === "course start") {
        break;
    }
    $args = explode(":", $input);
    $command = $args[0];
    switch ($command) {
        case "Add":
            $lesson = $args[1];
            if (!in_array($lesson, $lessons)) {
                $lessons[] = $lesson;
            }
            break;
        case "Insert":
            $lesson = $args[1];
            $index = $args[2];
            if (!in_array($lesson, $lessons)) {
                array_splice($lessons, $index, 0, $lesson);
            }
            break;
        case "Remove":
            $lesson = $args[1];
            $index = array_search($lesson, $lessons);
            if ($index !== false) {
                array_splice($lessons, $index, 1);
            }
            break;
        case "Exercise":
            $lesson = $args[1];
            $index = array_search($lesson, $lessons);
            if ($index !== false) {
                $temp = $lesson . "-Exercise";
                array_splice($lessons, $index + 1, 0, $temp);
            } else {
                $lessons[] = $lesson;
                $lessons[] = $lesson . "-Exercise";
            }
            break;
        case "Swap":
            $lesson1 = $args[1];
            $lesson2 = $args[2];
            $lessons = swap($lessons, $lesson1, $lesson2);
            break;
    }
}
$count = count($lessons);
for ($i = 0; $i < $count; $i++) {
    $number = $i + 1;
    echo "$number.$lessons[$i]\n";
}
function swap(array $lessons, $lesson1, $lesson2): array
{
    $index1 = array_search($lesson1, $lessons);
    $index2 = array_search($lesson2, $lessons);
    if ($index1 !== false && $index2 !== false) {
        $lessons[$index2] = $lesson1;
        $lessons[$index1] = $lesson2;
        if (isset($lessons[$index1 + 1])) {
            if ($lessons[$index1 + 1] === $lesson1 . "-Exercise") {
                array_splice($lessons, $index1 + 1, 1);
                array_splice($lessons, $index2 + 1, 0, $lesson1 . "-Exercise");
            }
        }
        if (isset($lessons[$index2 + 1])) {
            if ($lessons[$index2 + 1] === $lesson2 . "-Exercise") {
                array_splice($lessons, $index2 + 1, 1);
                array_splice($lessons, $index1 + 1, 0, $lesson2 . "-Exercise");
            }
        }
    }
    return $lessons;
}