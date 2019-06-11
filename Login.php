<?php

$username = readline();
$password = readline();

for ($i = 0; $i <= 3; $i++) {
    if ($i == 3) {
        if ($password == strrev($username)) {
            echo "User $username logged in.";
            break;
        } else {
            echo "User $username blocked!";
        }
    } else if ($password == strrev($username)) {
        echo "User $username logged in.";
        break;
    } else {
        echo "Incorrect password. Try again." . PHP_EOL;
        $password = readline();
    }
}
