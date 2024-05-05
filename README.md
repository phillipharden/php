<div 
style="display: flex;
  justify-content: center;"
>
<img 
src="images/php_logo.png"
alt="PHP Elephant Logo"
style="float: left; margin-right: 10px; height: 100px; width: auto;"
/>

</div>



### PHP Installation

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


### VS Code

**Helpful extensions:**

* [PHP Intelephense](https://intelephense.com/)
* [PHP DocBlocker](https://marketplace.visualstudio.com/items?itemName=neilbrayfield.php-docblocker)




## Comments

`// This is a single line comment.` 

`/*
Mulitle line comment.
*/`

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

## Variables
####Variable naming in PHP
* Prefixed with a dollar sign ($)
* Must start with a letter or an uderscore
* Can not start with a number
* Can only contain letters, numbers and underscores
* Are case sensitive ($Name and $name are not the same)

## PHP Data Types

* **String:** Sequence of characters. Enclosed in quotes
* **Integer:** Whole number. It can be positive or negative
* **Float:** Number with a decimal point
* **Boolean:** true or False
* **Array:** Holds multiple values
* **Object:** Collection of properties & methods
* **Null:** Represents a variable with no value








































































































