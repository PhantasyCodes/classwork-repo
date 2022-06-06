<?php

$num1 = $_POST["fnumber"];
$num2 = $_POST["snumber"];

function findSum($num1, $num2) {
    $int_value1 = intval($num1);
    $int_value2 = intval($num2);

    $sum = $int_value1 + $int_value2;
    return $sum;
}

echo "<h1>The sum of number1 and number2 is " .findSum($num1, $num2)."</h1>";