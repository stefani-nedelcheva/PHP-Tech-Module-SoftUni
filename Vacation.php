<?php

$numOfPeople = intval(readline());
$typeOfGroup = readline();
$day = readline();
$price = 0;

if ($numOfPeople >= 100 && $typeOfGroup == "Business") {
    $numOfPeople -= 10;
}

if ($typeOfGroup == "Students") {
    if ($day == "Friday") {
        $price = 8.45 * $numOfPeople;
    } else if ($day == "Saturday") {
        $price = 9.80 * $numOfPeople;
    } else if ($day == "Sunday") {
        $price = 10.46 * $numOfPeople;
    }
    if ($numOfPeople >= 30) {
        $price = $price * 0.85;
    }
}
if ($typeOfGroup == "Business") {
    if ($day == "Friday") {
        $price = 10.90 * $numOfPeople;
    } else if ($day == "Saturday") {
        $price = 15.60 * $numOfPeople;
    } else if ($day == "Sunday") {
        $price = 16.00 * $numOfPeople;
    }

}
if ($typeOfGroup == "Regular") {
    if ($day == "Friday") {
        $price = 15.00 * $numOfPeople;
    } else if ($day == "Saturday") {
        $price = 20.00 * $numOfPeople;
    } else if ($day == "Sunday") {
        $price = 22.50 * $numOfPeople;
    }
    if ($numOfPeople >= 10 && $numOfPeople <= 20) {
        $price = $price * 0.95;
    }
}
echo "Total price: " . number_format($price, 2, ".", "");