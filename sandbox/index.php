<?php

$output = null;
$string = 'Hello World';

/*
- `Y` - The year
- `m` - The month
- `d` - The day
- `D` - The short name of the day of the week
- `l` - The name of the day of the week
- `h` - The hour
- `i` - The minute
- `s` - The second
- `a` - AM/PM

*/
$output = date('m') . '/' . date('d') . '/' . date('Y');
$output = date('m/d/Y');

// Get year
$output = date('Y'); 

// 1999 Get year with timestamp
$output = date('Y', 936345600); 

// Get timestampe from strtotime
$output = date('Y', strtotime('1999-09-01')); 

// Get time
$output = date('Y-m-d h:i:s a'); 

// More https://www.php.net/manual/en/function.date.php

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