<?php

$list = [];

while (true) {
    $input = readline();
    if ($input === "END") {
        break;
    }
    $args = explode("->", $input);
    $command = $args[0];
    $store = $args[1];
    if ($command === "Add") {
        $item = $args[2];
        $items = explode(",", $item);
        foreach ($items as $key => $value) {
            if (!key_exists($store, $list)) {
                $list[$store] = [];
            }
            $list[$store][] = $value;
        }
    }
    if ($command === "Remove") {
        $store = $args[1];
        if (key_exists($store, $list)) {
            unset($list[$store]);

        }
    }
}
echo "Stores list:\n";

uksort($list, function ($store1, $store2) use ($list) {
    $count1 = count($list[$store1]);
    $count2 = count($list[$store2]);

    if ($count1 == $count2) {
        return $store2 <=> $store1;
    }
    return $count2 <=> $count1;
});

foreach ($list as $store => $item) {
    echo $store . PHP_EOL;
    foreach ($item as $value) {
        echo "<<$value>>\n";
    }
}