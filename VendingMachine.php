<?php

$input = readline();
$budget = 0;
$process = 'Start';


while ($input !== 'End') {
    if ($input == 'Start') {
        $process = 'End';
    }

    if ($process == 'Start') {
        if ($input == 0.1 || $input == 0.2 || $input == 0.5 || $input == 1 || $input == 2) {
            $budget += floatval($input);

        } else {
            echo "Cannot accept $input" . PHP_EOL;
        }
    } else if ($process == 'End') {
        if ($input == 'Start') {
        } else if ($input == 'Nuts') {
            if ($budget >= 2.0) {
                echo "Purchased nuts" . PHP_EOL;
                $budget -= 2.0;
            } else {
                echo 'Sorry, not enough money' . PHP_EOL;
            }
        } else if ($input == 'Water') {
            if ($budget >= 0.7) {
                echo "Purchased water" . PHP_EOL;
                $budget -= 0.7;
            } else {
                echo 'Sorry, not enough money' . PHP_EOL;
            }
        } else if ($input == 'Crisps') {
            if ($budget >= 1.5) {
                echo "Purchased crisps" . PHP_EOL;
                $budget -= 1.5;
            } else {
                echo 'Sorry, not enough money' . PHP_EOL;
            }
        } else if ($input == 'Soda') {
            if ($budget >= 0.7 + 0.1) {
                echo "Purchased soda" . PHP_EOL;
                $budget -= 0.8;
            } else {
                echo 'Sorry, not enough money' . PHP_EOL;
            }
        } else if ($input == 'Coke') {
            if ($budget >= 1.0) {
                echo "Purchased coke" . PHP_EOL;
                round($budget -= 1.0);
            } else {
                echo 'Sorry, not enough money' . PHP_EOL;
            }
        } else {
            echo 'Invalid product' . PHP_EOL;
        }
    }
    $input = readline();
}
$budget = sprintf('%0.2f', intval($budget));
echo "Change: $budget";


//$sum = 0;
//$total = 0;
//
//while (true) {
//    $textInput = readline();
//    if ($textInput == "Start") {
//        break;
//    }
//    $coin = floatval($textInput);
//    if ($coin == 0.1 || $coin == 0.2 || $coin == 0.5 || $coin == 1 || $coin == 2) {
//        $sum += $coin;
//    } else {
//        echo "Cannot accept " . $coin . PHP_EOL;
//    }
//}
//
//$price = 0;
//$flag = false;
//
//while (true) {
//    $input = readline();
//
//    switch ($input) {
//        case "Nuts":
//            $price = 2;
//            $flag = true;
//            break;
//        case "Water":
//            $price = 0.7;
//            $flag = true;
//            break;
//        case "Crisps":
//            $price = 1.5;
//            $flag = true;
//            break;
//        case "Soda":
//            $price = 0.8;
//            $flag = true;
//            break;
//        case "Coke":
//            $price = 1;
//            $flag = true;
//            break;
//    }
//    if ($input == "End") {
//        break;
//    }
//    if ($sum < $price) {
//        echo "Sorry, not enough money\n";
//    } else if ($flag) {
//        echo "Purchased " . strtolower($input) . PHP_EOL;
//        $sum -= $price;
//    } else {
//        echo "Invalid product\n";
//    }
//
//}
//printf("Change: %.2f", $sum);