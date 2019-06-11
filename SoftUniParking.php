<?php

$n = intval(readline());
$registered = [];

for ($i = 0; $i < $n; $i++) {
    $input = readline();
    $tokens = explode(" ", $input);
    $command = $tokens[0];
    $username = $tokens[1];

    switch ($command) {
        case "register":
            $command = $tokens[0];
            $username = $tokens[1];
            $licencePlate = $tokens[2];

            if (key_exists($username, $registered)) {
                echo "ERROR: already registered with plate number $licencePlate" . PHP_EOL;
            } else if (in_array($licencePlate, $registered)) {
                echo "ERROR: already registered with plate number $licencePlate" . PHP_EOL;
            } else {
                $registered[$username][] = $licencePlate;
                echo "$username registered $licencePlate successfully\n";
            }
            break;
        case "unregister":
            if (!key_exists($username, $registered)) {
                echo "ERROR: user $username not found\n";
            } else {
                echo "$username unregistered successfully\n";
                unset($licencePlate, $registered[$username]);
            }
            break;
    }
}

foreach ($registered as $user => $plate) {
    echo "$user => ";
    foreach ($plate as $value) {
        echo "$value\n";
    }
}