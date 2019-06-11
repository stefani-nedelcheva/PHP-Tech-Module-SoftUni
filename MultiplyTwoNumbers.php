<?php

if (isset($_GET['num1']) && isset($_GET['num2'])) {
    $num1 = intval($_GET['num1']);
    $num2 = intval($_GET['num2']);

    $result = $num1 * $num2;
    echo $result;
}
?>