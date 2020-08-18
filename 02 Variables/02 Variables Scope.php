<?php
// Run this file from terminal or from an IDE/Text Editor 
/*
Variables Scope:
global: declared outside a specific function
local: declared within a function
static: a local variable not deleted when a function is completed/executed
 */
$x = 5; // global var
$y = 10; // global var
function myFunction()
{
    global $y; // access a global variable from a function
    global $x; // access a global variable from a function
    //$GLOBALS[‘y’]++;
    $loc = 5; // local val
    static $z = 5; // static var
    echo "$x"+"$y"+"$loc"; // 20
    echo (" ");
    echo "$x"+"$y"+"$z"; // 20
    $loc += 5;
    $z += 5;
}
myFunction(); // 20 20
echo "\n";
myFunction(); // 20 25
echo "$loc"; // This will return a blank line because the local variable can't be accessed here
echo "$z"; // This will return a blank line because the static local variable can't be accessed here
?>
