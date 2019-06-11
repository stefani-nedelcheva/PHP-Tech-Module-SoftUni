<?php

$productsQty = [];
$productsPrice = [];

while (true) {
    $input = readline();
    if ($input === "buy") {
        break;
    }
    $tokens = explode(" ", $input);
    $productName = $tokens[0];
    $productPrice = $tokens[1];
    $productQty = $tokens[2];

    $productsPrice[$productName] = $productPrice;
    if (!key_exists($productName, $productsQty)) {
        $productsQty[$productName] = $productQty;
    } else {
        $productsQty[$productName] += $productQty;
    }
}
foreach ($productsPrice as $product => $price) {
    $sum = $price * $productsQty[$product];
    printf("$product -> %.2f" . PHP_EOL, $sum);
}