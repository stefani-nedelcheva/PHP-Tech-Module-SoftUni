<?php

class Student
{
    /**
     * @var string
     */
    private $name;
    /**
     * @var array
     */
    private $grades;
    private $avgGrades;

    /**
     * Student constructor.
     * @param string $name
     * @param array $grades
     * @param $avgGrades
     */
    public function __construct(string $name, array $grades, $avgGrades)
    {
        $this->name = $name;
        $this->grades = $grades;
        $this->avgGrades = $avgGrades;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return array
     */
    public function getGrades(): array
    {
        return $this->grades;
    }

    /**
     * @return mixed
     */
    public function getAvgGrades()
    {
        return $this->avgGrades;
    }

}

$n = readline();
$students = [];

while ($n-- > 0) {
    $input = explode(" ", readline());
    $name = $input[0];
    $grades = [];
    for ($i = 1; $i < count($input); $i++) {
        $grades[] = $input[$i];
    }
    $avg = array_sum($grades) / count($grades);
    $student = new Student($name, $grades, $avg);
    $students[] = $student;
}
usort($students, function (Student $s1, Student $s2) {
    $avg1 = $s1->getAvgGrades();
    $avg2 = $s2->getAvgGrades();
    $name1 = $s1->getName();
    $name2 = $s2->getName();
    if ($name1 === $name2) {
        return $avg2 <=> $avg1;
    }
    return $name1 <=> $name2;
});

foreach ($students as $st) {
    $name = $st->getName();
    $avg = $st->getAvgGrades();
    if ($avg >= 5) {
        $avg = number_format($avg, 2, '.', '');
        echo "$name -> $avg\n";
    }
}
