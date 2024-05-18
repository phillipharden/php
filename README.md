<div style="display: flex; align-items: center;"><img src="images/php_logo.png" alt="PHP Elephant Logo" style="margin-left: 10px; height: 100px; width: auto;" /></div><br />

<p style="font-size: 50px; color: blue; font-weight: bold;">PHP</p>

### Installation

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

`$fullName = $name.' '. $lastName;`

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




























































</br></br></br></br></br></br></br></br></br></br></br></br></br></br></br>
</br></br></br></br></br></br></br></br></br></br></br></br></br></br></br>
</br></br></br></br></br></br></br></br></br></br></br></br></br></br></br>
</br></br></br></br></br></br></br></br></br></br></br></br></br></br></br>
</br></br></br></br></br></br></br></br></br></br></br></br></br></br></br>
<p style="font-size: 10px; color: blue;">Phillip Harden 2024</p>































































































