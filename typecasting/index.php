

<?php

$number1 = 0;
$number2 = 7;
$number3 = '16';
$fruit = 'apple';
$bool1 = true;
$bool2 = false;
$null = null;

// Implicit Conversion (Juggling)
$result = $number1 + $number2; // int
$result = $number1 + $number3; // int (string to int)
$result = $number3 + $number3; // int (string to int)
$result = $number1 . $number2; // string (int to string)
// $result5 = $fruit + $number2; // Error
$result = $number1 + $bool1; // int int (bool to int) true converts to 1
$result = $number1 + $bool2; // int int (bool to int) false converts to 0
$result = $number1 + $null; // int int (null to int) null converts to 0

// Explicit Conversion
$result = (string) $number1;
$result = (int) $number3;
$result = (bool) $number1; // any number that is not 0 will convert to true

var_dump($result);