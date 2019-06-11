<?php

$users = explode(", ", readline());

foreach ($users as $username) {
    if (strlen($username) >= 3 && strlen($username) <= 16) {
        $count = strlen($username);
        $isValid = true;
        for ($i = 0; $i < $count; $i++) {
            $current = $username[$i];
            if (!(ctype_alnum($current) || $current === "_" || $current === "-")) {
                $isValid = false;
                break;
            }
        }
        if ($isValid) {
            echo $username . PHP_EOL;
        }
    }
}
// regex //
//$pattern = '/^[A-Za-z0-9-_]{3,16}$/';
