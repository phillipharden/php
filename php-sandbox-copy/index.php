<?php

$output = null;
$string = 'hello World';

// String Length
$output = strlen($string); // displays 11

// String Word Count
$output = str_word_count($string); // displays 2



// String Position - this displays 6 becasue that is the index in which the word World starts
$output = strpos($string, 'World'); 

// Get the specific character by index
$output = $string[4]; // displays 'o' becasue it is at index 4

// Substring - this will get the substring of the characters located within the indexes you out in the 2nd & 3rd parameters
$output = substr($string, 6, 5); // displays "World"

// String Replace
// This can replace any section of a string by searching the characters and replacing them
$output = str_replace('World', 'People', $string); 

// String to lower will make the string all lowercse
$output = strtolower($string);

// String to upper
$output = strtoupper($string);

// Uppercase Words will make the first letter of every word uppercase
$output = ucwords($string);


// Trim
$output = trim('    Hello World     ');

// More references: https://www.php.net/manual/en/ref.strings.php
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
            <h2 class="text-2xl font-semibold mb-4">Outputs below</h2>
            <p class="text--xl mb-4">
                <?= $output ?>
            </p>
            <p class="text--xl mb-4">
                <?= $string ?>
            </p>
        </div>
    </div>
</body>

</html>