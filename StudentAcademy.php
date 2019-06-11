<?php

$n = intval(readline());
$students = [];
$gradesCount = [];

for ($i = 0; $i < $n; $i++) {
    $name = readline();
    $grade = floatval(readline());
    if (!key_exists($name, $students)) {
        $students[$name] = $grade;
        $gradesCount[$name] = 1;
    } else {
        $students[$name] += $grade;
        $gradesCount[$name] += 1;
    }
}

foreach ($students as $student => $sumGrade) {
    $sum = $students[$student];
    $gradeCount = $gradesCount[$student];
    $averageGrade = $sum / $gradeCount;
    $students[$student] = $averageGrade;
}
arsort($students);

foreach ($students as $student => $avg) {
    if ($avg >= 4.5) {
        printf("$student -> %.2f" . PHP_EOL, $avg);
    }
}
