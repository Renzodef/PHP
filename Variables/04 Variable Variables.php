<?php
// Run this file from terminal or from an IDE/Text Editor
/*
Variable Variables
With PHP, you can use one variable to specify another variable's name.
So, a variable variable treats the value of another variable as its name.
For example:
 */
$a = 'hello';
$hello = "Hi!";
/*
$$a is a variable that is using the value of another variable,
$a, as its name. The value of $a is equal to "hello".
The resulting variable is $hello, which holds the value "Hi!".
 */
echo $$a; // Outputs 'Hi!'
?>