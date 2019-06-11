<?php

class Person
{
    private $name;
    private $id;
    private $age;

    public function __construct($name, $id, $age)
    {
        $this->name = $name;
        $this->id = $id;
        $this->age = $age;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getId()
    {
        return $this->id;
    }

    public function getAge()
    {
        return $this->age;
    }

    public function __toString()
    {
        return $this->name . " with ID: " . $this->id . " is " . $this->age . " years old.";
    }
}

$people = [];
$input = readline();
while ($input !== "End") {
    $humanProp = explode(" ", $input);
    $human = new Person($humanProp[0], $humanProp[1], $humanProp[2]);
    $people[] = $human;

    $input = readline();
}
usort($people, function (Person $p1, Person $p2) {
    return $p1->getAge() <=> $p2->getAge();
});

foreach ($people as $person) {
    echo $person . PHP_EOL;
}