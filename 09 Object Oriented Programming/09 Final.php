<?php
final class myClass {
    final function myFunction() {
        echo "Parent";
    }
}

// ERROR because a final class cannot be inherited.
// class myClass2 extends myClass {
    // ERROR because a final method cannot be overridden in child classes.
    // function myFunction() {
    //     echo "Child";
    // }
// }
?>