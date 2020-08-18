<?php
$x = 100; // integer
$y = "100"; // string
if ($x == $y) { // This check if the two variables are equals (value equal)
    echo "True";
}
echo " ";
if ($x === $y) { // This check if the two variables are identical (type and value equal)
    echo "True";
} else {
    echo "False";
}
// Output: True False
?>
