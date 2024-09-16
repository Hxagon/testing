<?php



/*
 * Complete the 'fizzBuzz' function below.
 *
 * The function accepts INTEGER n as parameter.
 */

function fizzBuzz($n) {

    for ($i = 1; $i <= $n; $i++) {

        $ouput = $i;

        // FizzBuzz output
        if ($i % 3 === 0 && $i % 5 === 0) {
            $ouput = 'FizzBuzz';
        }

        // Fizz output
        if ($i % 3 === 0 && $i % 5 !== 0) {
            $ouput = 'Fizz';
        }

        // Buzz output
        if ($i % 3 !== 0 && $i % 5 === 0) {
            $ouput = 'Buzz';
        }

        // Value output
        if ($i % 3 !== 0 || $i % 5 !== 0) {
            $ouput = $i;
        }

        echo $ouput . PHP_EOL;
    }

}

$n = intval(trim(fgets(STDIN)));

fizzBuzz($n);
