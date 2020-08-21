<?php
function setCounter($num=10) {
    echo "Counter is ".$num."\n";
}
setCounter(42);  // Counter is 42
setCounter();  // Counter is 10 (default parameter)
?>