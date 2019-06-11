<?php

class Student
{
    private $firstName;
    private $lastName;
    private $age;
    private $hometown;

    /**
     * Student constructor.
     * @param $firstName
     * @param $lastName
     * @param $age
     * @param $hometown
     */
    public function __construct($firstName, $lastName, $age, $hometown)
    {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->age = $age;
        $this->hometown = $hometown;
    }

    /**
     * @return mixed
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * @return mixed
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * @return mixed
     */
    public function getAge()
    {
        return $this->age;
    }

    /**
     * @return mixed
     */
    public function getHometown()
    {
        return $this->hometown;
    }
}


while (true) {
    $input = readline();
    if ($input === "end") {
        break;
    }
    $studentsData = explode(" ", $input);
    $firstName = $studentsData[0];
    $lastName = $studentsData[1];
    $age = $studentsData[2];
    $hometown = $studentsData[3];
}
$students = [];
$student = new Student($firstName, $lastName, $age, $hometown);
$students[] = $student;
print_r($students);
//$city = readline();
//if ($city === $hometown) {
//
//}