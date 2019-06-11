<?php

$input = readline();
$courses = [];

while (true) {
    if ($input === "end") {
        break;
    }
    $args = explode(" : ", $input);
    $course = $args[0];
    $student = $args[1];
    $courses[$course][] = $student;

    $input = readline();
}
uksort($courses, function ($course1, $course2) use ($courses) {
    $count1 = count($courses[$course1]);
    $count2 = count($courses[$course2]);
    return $count2 <=> $count1;
});

foreach ($courses as $course => $studentArr) {
    asort($studentArr);
    $count = count($studentArr);
    echo "$course: $count\n";
    foreach ($studentArr as $student) {
        echo "-- $student\n";
    }
}