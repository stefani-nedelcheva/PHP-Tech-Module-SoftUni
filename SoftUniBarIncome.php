<?php

$input = readline();
$pattern = '/%(?<name>[A-Z][a-z]+)%[^|$%.]*<(?<product>[\w]+)>[^|$%.]*\|(?<count>[\d]+)\|[^|$%.0-9]*(?<price>\d+(.\d{1,2})?)\$/';
$matches = [];
$sum = 0;

while (true) {
    if ($input === "end of shift") {
        break;
    }
    if (preg_match($pattern, $input, $matches)) {
        $currentSum = $matches['count'] * $matches['price'];
        $formatted = number_format($currentSum, 2, '.', '');
        $sum += $currentSum;
        echo "$matches[name]: $matches[product] - $formatted\n";
    }
    $input = readline();
}
printf("Total income: %.2f", $sum);