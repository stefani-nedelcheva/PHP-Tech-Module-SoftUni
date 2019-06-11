<?php

class Song
{
    private $typeSong;
    private $name;
    private $time;

    /**
     * Song constructor.
     * @param $typeSong
     * @param $name
     * @param $time
     */
    public function __construct($typeSong, $name, $time)
    {
        $this->typeSong = $typeSong;
        $this->name = $name;
        $this->time = $time;
    }

    /**
     * @return mixed
     */
    public function getTypeSong()
    {
        return $this->typeSong;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return mixed
     */
    public function getTime()
    {
        return $this->time;
    }
}

$songs = intval(readline());
$arraySongs = [];
for ($i = 0; $i < $songs; $i++) {
    $current = explode("_", readline());
    $type = $current[0];
    $name = $current[1];
    $time = $current[2];
    $song = new Song($type, $name, $time);
    array_push($arraySongs, $song);
}

$typeList = readline();
if ($typeList == "all") {
    foreach ($arraySongs as $value) {
        echo $value->getName() . PHP_EOL;
    }
} else {
    foreach ($arraySongs as $value) {
        if ($value->getTypeSong() === $typeList) {
            echo $value->getName() . PHP_EOL;
        }
    }

}