<?php 
function fib($length) {
    $x = 0;
    $y = 1;
    echo $x , "<br>";
    for ($i = 0; $i < $length; $i++) {
        $number = $x;
        $x = $y;
        $y = $number + $y;
        // Show numbers
        echo $x . "<br>" . PHP_EOL; 
    } 
}
echo fib(100);