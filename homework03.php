<?php

function fizzbuzz($c,$d) {
    for ($i=1; $i <= 100; $i++) {
        if ($i % ($c*$d) === 0) {
            echo 'FizzBuzz'.PHP_EOL;
        } elseif ($i % $c === 0) {
            echo 'Fizz'.PHP_EOL;
        } elseif ($i % $d === 0) {
            echo 'Buzz'.PHP_EOL;
        } else {
            echo $i.PHP_EOL;
        }
    }
}
fizzbuzz(3,5);

?>
