<?php

$input = readline();
$students = [];
$submissions = [];

while (true) {
    if ($input === "exam finished") {
        break;
    }
    $args = explode("-", $input);
    $student = $args[0];
    $technology = $args[1];
    if ($technology === "banned") {
        if (key_exists($student, $students)) {
            unset($students[$student]);
            continue;
        }
    } else {
        $points = $args[2];
        if (!key_exists($technology, $submissions)) {
            $submissions[$technology] = 1;
        } else {
            $submissions[$technology] += 1;
        }
        if (!key_exists($student, $students)) {
            $students[$student] = $points;
        } else {
            if ($students[$student] < $points) {
                $students[$student] = $points;
            }
        }
    }
    $input = readline();
}

uksort($students, function ($stud1, $stud2) use ($students) {
    $point1 = $students[$stud1];
    $point2 = $students[$stud2];
    if ($point1 === $point2) {
        return $stud1 <=> $stud2;
    }
    return $point2 <=> $point1;
});

uksort($submissions, function ($tech1, $tech2) use ($submissions) {
    $count1 = $submissions[$tech1];
    $count2 = $submissions[$tech2];
    if ($count1 === $count2) {
        return $tech1 <=> $tech2;
    }
    return $count2 <=> $count1;
});

echo "Results:\n";
foreach ($students as $stud => $points) {
    echo "$stud | $points\n";
}
echo "Submissions:\n";
foreach ($submissions as $tech => $count) {
    echo "$tech - $count\n";
}