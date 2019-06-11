<?php

$companies = [];

while (true) {
    $input = readline();
    if ($input === "End") {
        break;
    }
    $tokens = explode(" -> ", $input);
    $company = $tokens[0];
    $employeeId = $tokens[1];

    if (!key_exists($company, $companies)) {
        $companies[$company][] = $employeeId;
    } else {
        if (!in_array($employeeId, $companies[$company])) {
            $companies[$company][] = $employeeId;
        }
    }
}

uksort($companies, function ($comp1, $comp2) use ($companies) {
    $name1 = $comp1;
    $name2 = $comp2;
    return $name1 <=> $name2;
});

foreach ($companies as $c => $id) {
    echo "$c\n";
    foreach ($id as $value) {
        echo "-- " . $value . PHP_EOL;
    }
}