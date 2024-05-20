<div style="display: flex; align-items: center;"><img src="images/php_logo.png" alt="PHP Elephant Logo" style="margin-left: 10px; height: 100px; width: auto;" /></div><br />

# PHP


<br/>
## Installation

To install [PHP](https://www.php.net/) on MacOS use the terminal, be sure to have [homebrew](https://brew.sh/) installed. 

Then using homebrew enter the command 

`homebrew install php` 

To check the version you have installed enter the command 

`php -v`

If you do not have the current version and want to upgrade, enter the command 

`brew upgrade php`

Once PHP is installed, create a PHP file **index.php**.

To run the file on local server, using terminal go into the directory where your php file is located and run the command `php -S localhost:8000` You can use whatever server you want, I am using 8000 here. 
You can also run the PHP file in termail using the command `php index.php`

<br />
### VS Code

**Helpful extensions:**

* [PHP Intelephense](https://intelephense.com/)
* [PHP DocBlocker](https://marketplace.visualstudio.com/items?itemName=neilbrayfield.php-docblocker)



<br/>
## Comments

`// This is a single line comment.` 

`/*
Mulitle line comment.
*/`


<br />
## Printing

Print & Echo are called language constructs, sometimes referred to as statements.


#### Print

`<?php print 'Hello World'; ?>`

`<?php print '<p>Hello World</p>' ?>`

*if there is no HTML below the PHP then you do not need to include the closing tag. "`?>`"

#### Echo

`<?php echo 'Hello World'; ?>`

Cleaner code:

`<?= 'Hello World' ?>`

Parsing HTML

`<?php echo '<p>Hello World</p>' ?>`

Unlike print, echo can contain multiple values;

`echo 'Value One', 'Value Two';`


<br />
## Variables
####Variable naming in PHP
* Prefixed with a dollar sign ($)
* Must start with a letter or an uderscore
* Can not start with a number
* Can only contain letters, numbers and underscores
* Are case sensitive ($Name and $name are not the same)

[Variable | Basics](https://www.php.net/manual/en/language.variables.basics.php)


<br />
## PHP Data Types

* **String:** Sequence of characters. Enclosed in quotes

`$name = 'Phillip Harden';`

* **Integer:** Whole number. It can be positive or negative

`$age = 46;`

* **Float:** Number with a decimal point

`$rating = 4.5;`

* **Boolean:** true or False

`$isLoaded = true;`

* **Array:** Holds multiple values

`$friends = ['Yaphet', 'Robert', 'Matt', 'Adam'];`

* **Object:** Collection of properties & methods

`$person = new stdClass();`

* **Null:** Represents a variable with no value

`$nothing = null;`

* **Resource:**

`$file = fopen('index.php', 'r');`


To get the variable type you can use:

`var_dump($name);`

or

`echo getType($name);`


`PHP Data Types`

<br />
## Concatenation

When concatenating the separator is a `.`

`$name = 'Phillip';`

`$lastName = 'Harden';`

`$fullName = $name .' '. $lastName;`

<br />

`<?= 'Hello, my name is '. $fullName ?>`

`<?= "Hello, my name is $fullName" ?>`

`<?= 'Hello, my name is \'Phillip\'' ?>`

`<?= "Hello, my name is \"Phillip\"" ?>`

`<?= "Hello, my name is \"$fullName\"" ?>`


<br />
## Typecasting & Juggling
 
 [Juggling Doc](https://www.php.net/manual/en/language.types.type-juggling.php)
 
 [PHP Casting](https://www.w3schools.com/php/php_casting.asp)
 


**Implicit Typecasting [Juggling]:**
When PHP automatically converts values from one type to another whenever required

**Explicit Typecasting:**
When you explicitly specify the target data type using casting operators



`<?php`

`$number1 = 0; // int`

`$number2 = 7; // int`

`$number3 = '16'; // string`

`$fruit = 'apple'; // string`

`$bool1 = true; // bool`

`$bool2 = false; // bool`

`$null = null; // null`

`// Implicit Conversion (Juggling)`

`$result = $number1 + $number2; // int`

`$result = $number1 + $number3; // int (string to int)`

`$result = $number3 + $number3; // int (string to int)`

`$result = $number1 . $number2; // string (int to string)`

> Fatal error: Uncaught TypeError: Unsupported operand types: string + int

`$result5 = $fruit + $number2; // Error`

`$result = $number1 + $bool1; // int int (bool to int) true converts to 1`

`$result = $number1 + $bool2; // int int (bool to int) false converts to 0`

`$result = $number1 + $null; // int int (null to int) null converts to 0`

`// Explicit Conversion`

`$result = (string) $number1;`

`$result = (int) $number3;`

`$result = (bool) $number1; // any number that is not 0 will convert to true`

`var_dump($result);`



<br/>
## Arithmetic Operators & Functions

### Arithmetic Operators

`+` Addition 

`-` Suntraction

`*` Multiplication

`/` Division 

`%` Modulus

</br>

 **Example**

`$output = null;`

`$num1 = 20;`
`$num2 = 10;`

</br>

> 20 + 10 = 30

`$output = "$num1 + $num2 = " . $num1 + $num2;`

> 20 - 10 = 10

`$output = "$num1 - $num2 = " . $num1 - $num2;`

> 20 * 10 = 200

`$output = "$num1 * $num2 = " . $num1 * $num2;`

> 20 / 10 = 2

`$output = "$num1 / $num2 = " . $num1 / $num2;`

> 20 % 10 = 0

`$output = "$num1 % $num2 = " . $num1 % $num2;`

</br>
### Assignment Operators

Here I will add 20 to the value of $num3

`$num3 = 10;`

Instead of using:

`$num3 = $num3 + 20;`

I can use the assignment operator:

`$num3 += 20;`

 This works for all of the operators.

</br>
### Built-in PHP Functions

**rand() genrates a random number**

`$output = rand();`

`$output = getrandmax();`

`$output = rand(1, 10);`

</br>

**round()**

`$output = round(4.2); // rounds to 4`

</br>

**ceil() - always rounds up**

`$output = ceil(4.2); // rounds up to 5`

</br>

**floor() - rounds down**

`$output = floor(4.9); // round down to 4`

</br>

**sqrt() - get the square**

`$output = sqrt(64); // displays the square root of 64 which is 8`

</br>

**pi - 3.1415926535898**

`$output = pi();`

</br>

**abs() - gives the absolute number, canges negative to positive**

`$output = abs(-4.7); `

</br>


**max() - find the largest number**

`$output = max(1, 2, 3, 50); // displays 50`

`$output = max([1, 25, 3]); // works with arrays/displays 25`

</br>

**min() - find the lowest number**

`$output = min(1, 2, 3, 50);`

`$output = min([1, 25, 3]); // works with arrays`


</br>

**Number format - this will place comas in the appropriate loactions of arge numbers**

`$output = number_format(2352346.2346246);`

The first parameter is the number i want to format. The second parameter is the number of decimal points you want in the formatted number. Here, it is set to 2, meaning the number will be rounded and formatted to two decimal places. The third parameter is the decimal point character. In this example, it is set to a period. The fourth parameter is the thousands separator. In this case, it is set to a comma.

`$output = number_format(2352346.2346246, 2, '.', ',' );`

> This will display the formatted number as 2,352,346.23

</br>

## String Functions


`$output = null;`

`$string = 'hello World';`


**String Length**

`$output = strlen($string); // displays 11`


**String Word Count**

`$output = str_word_count($string); // displays 2`




**String Position** - this displays 6 becasue that is the index in which the word World starts

`$output = strpos($string, 'World');`

Get the specific character by index

`$output = $string[4]; // displays 'o' becasue it is at index 4`


**Substring** - this will get the substring of the characters located within the indexes you out in the 2nd & 3rd parameters

`$output = substr($string, 6, 5); // displays "World"`


**String Replace**

This can replace any section of a string by searching the characters and replacing them

`$output = str_replace('World', 'People', $string); `


String to lower will make the string all lowercase

`$output = strtolower($string);`

/String to upper

`$output = strtoupper($string);`

Uppercase Words will make the first letter of every word uppercase

`$output = ucwords($string);`


**Trim**

`$output = trim('    Hello World     ');`

</br>

More references: [https://www.php.net/manual/en/ref.strings.php](https://www.php.net/manual/en/ref.strings.php)



</br>


## Dates & Times

- `Y` - The year
- `m` - The month
- `d` - The day
- `D` - The short name of the day of the week
- `l` - The name of the day of the week
- `h` - The hour
- `i` - The minute
- `s` - The second
- `a` - AM/PM




























</br></br></br></br></br></br></br></br></br></br></br></br></br></br></br>

<div style="display: flex; align-items: center;"><img src="images/cir.png" alt="PHP Elephant Logo" style="margin-left: 10px; height: 100px; width: auto;" /></div><br />


<p style="font-size: 10px; color: blue;">Phillip Harden 2024</p>































































































