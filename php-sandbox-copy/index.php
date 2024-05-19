<?php
/*
| Arithmetic Operators      |
| Operator | Description    |
| -------- | -------------- |
|   `+`    | Addition       |
|   `-`    | Suntraction    |
|   `*`    | Multiplication |
|   `/`    | Division       |
|   `%`    | Modulus        |
| -------- | -------------- |
*/


$output = null;

$num1 = 20;
$num2 = 10;

$output = "$num1 + $num2 = " . $num1 + $num2;
$output = "$num1 - $num2 = " . $num1 - $num2;
$output = "$num1 * $num2 = " . $num1 * $num2;
$output = "$num1 / $num2 = " . $num1 / $num2;
$output = "$num1 % $num2 = " . $num1 % $num2;


// Assignment Operators

$num3 = 10;
$num3 = $num3 + 20;
$num3 += 20;

// Built-in PHP Functions
// rand() genrates a random number
$output = rand();
$output = getrandmax();
$output = rand(1, 10);


// round()
$output = round(4.2); // rounds to 4

// ceil() - always rounds up
$output = ceil(4.2); // rounds up to 5

// floor() - rounds down
$output = floor(4.9); // round down to 4

// sqrt() - get the square
$output = sqrt(64);

// pi - 3.1415926535898
$output = pi();

// abs() - gives the absolute number, canges negative to positive
$output = abs(-4.7); 

// max() - find the largest number
$output = max(1, 2, 3, 50);
$output = max([1, 25, 3]); // works with arrays

// min() - find the lowest number
$output = min(1, 2, 3, 50);
$output = min([1, 25, 3]); // works with arrays

// number format - this will place comas in the appropriate loactions of arge numbers 
$output = number_format(2352346.2346246);

// The first parameter is the number i want to format
//^ The second parameter is the number of decimal points you want in the formatted number. 
// Here, it is set to 2, meaning the number will be rounded and formatted to two decimal places.
//^ The third parameter is the decimal point character. In this example, it is set to a period
//^ The fourth parameter is the thousands separator. In this case, it is set to a comma
$output = number_format(2352346.2346246, 2, '.', ',' );



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Arithmetic Operators & Functions</title>
</head>

<body class="bg-gray-100">
    <header class="bg-blue-500 text-white p-4">
        <div class="container mx-auto">
            <h1 class="text-3xl font-semibold">Arithmetic Operators & Functions</h1>
        </div>
    </header>
    <div class="container mx-auto p-4 mt-4">
        <div class="bg-white rounded-lg shadow-md p-6">
            <h2 class="text-2xl font-semibold mb-4">Output</h2>
            <p class="text--xl mb-4">
                <?= $output ?>
            </p>
            <p class="text--xl mb-4">
                $num3: <?= $num3 ?>
            </p>
        </div>
    </div>
</body>

</html>