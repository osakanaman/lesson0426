<?php

function fizzbuzz($a,$b) {
    for ($i=1; $i <= 100; $i++) {
        if ($i % ($a*$b) === 0) {
            echo 'FizzBuzz'.PHP_EOL;
        } elseif ($i % $a === 0) {
            echo 'Fizz'.PHP_EOL;
        } elseif ($i % $b === 0) {
            echo 'Buzz'.PHP_EOL;
        } else {
            echo $i.PHP_EOL;
        }
    }
}
fizzbuzz(3,5);

?>
