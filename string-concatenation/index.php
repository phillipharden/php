<?php
// variables
$title = 'PHP | String Concatenation';
$heading = 'Welcome To The PHP Example Page'; 
$body = 'Welcome to our PHP example page! PHP (Hypertext Preprocessor) is a powerful server-side scripting language used to develop dynamic web applications and websites.';


$name = 'Phillip';
$lastName = 'Harden';
$fullName = $name.' '. $lastName;

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title><?php echo $title ?></title>
</head>

<body class="bg-gray-100">
    <header class="bg-blue-500 text-white p-4">
        <div class="container mx-auto">
            <h1 class="text-3xl font-semibold"><?php echo $title ?></h1>
        </div>
    </header>
    <div class="container mx-auto p-4 mt-4">
        <div class="bg-white rounded-lg shadow-md p-6">
            <h2 class="text-2xl font-semibold mb-4">Name</h2>
            <p><?= $fullName . '<br />' ?></p>
            <p><?= 'Hello, my name is '. $fullName ?></p>
            <p><?= "Hello, my name is $fullName" ?></p>
            <p><?= 'Hello, my name is \'Phillip\'' ?></p>
            <?= "Hello, my name is \"Phillip\"" ?>
            <p><?= "Hello, my name is \"$fullName\"" ?></p>
        </div>
    </div>
</body>

</html>