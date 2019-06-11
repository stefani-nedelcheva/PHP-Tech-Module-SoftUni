<?php

$password = readline();

$validLen = hasValidLength($password);
$validContent = hasValidContent($password);
$enoughDigits = hasEnoughDigits($password);

if (!$validLen) {
    echo "Password must be between 6 and 10 characters" . PHP_EOL;
}
if (!$validContent) {
    echo "Password must consist only of letters and digits" . PHP_EOL;
}
if (!$enoughDigits) {
    echo "Password must have at least 2 digits" . PHP_EOL;
}
if ($validLen && $validContent && $enoughDigits) {
    echo "Password is valid" . PHP_EOL;
}

function hasValidLength(string $text): bool
{
    $len = strlen($text);
    if ($len < 6 || $len > 10) {
        return false;
    }
    return true;
}

function hasValidContent(string $text): bool
{
    $len = strlen($text);
    if (ctype_alnum($text)) {
        return true;
    }
    return false;
}

function hasEnoughDigits(string $text): bool
{
    $digits = 0;
    $len = strlen($text);
    for ($i = 0; $i < $len; $i++) {
        $current = $text[$i];
        if (ctype_digit($current)) {
            $digits++;
        }
    }
    if ($digits < 2) {
        return false;
    }
    return true;
}


//$password = readline();
//
//function checkLength($password)
//{
//    $return = '';
//    if (strlen($password) < 6 || strlen($password) > 10) {
//        return "Password must be between 6 and 10 characters" . PHP_EOL;
//    }
//    return $return;
//}
//
//function checkConsist($password)
//{
//    $return = '';
//    for ($i = 0; $i < strlen($password); $i++) {
//        $current = $password[$i];
//        if (!ctype_digit($current) || !ctype_alpha($current)) {
//            return "Password must consist only of letters and digits" . PHP_EOL;
//        }
//    }
//    return $return;
//}
//
//function checkDigits($password)
//{
//    $return = '';
//    $counter = 0;
//    for ($i = 0; $i < strlen($password); $i++) {
//        $current = $password[$i];
//        if (ctype_digit($current)) {
//            $counter++;
//        }
//    }
//    if ($counter < 2) {
//        return "Password must have at least 2 digits" . PHP_EOL;
//    }
//    return $return;
//}
//
//$output = '';
//$output = checkLength($password);
//$output .= checkConsist($password);
//$output .= checkDigits($password);
//
//if ($output === '') {
//    echo "Password is valid";
//} else {
//    echo $output;
//}
