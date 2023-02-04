<?php
    /**
     * Algorithm
     *
     * 1. Show prompt to enter an integer between 1-20
     * 2. Validate the integer if it's between 1-20, if not show prompt again
     * 3. If integer is valid, create a loop that starts from 0 up to the inputted integer
     * Inside the loop
     * 1. Use recursion to generate sequence
     * 2. If number is zero, return 0
     * 3. If number is one, return 1
     * 4. else integer > 1, apply time complexity f(n-1) + f(n-2)
     */

    function readInput() {
        return readline('Enter integer from 1-20: ');
    }

    function fibonacci(int $number) {

        if ($number === 0) {
            return 0;
        }

        if ($number === 1) {
            return 1;
        }

        return fibonacci($number-1) + fibonacci($number-2);
    }

    $isValid = false;

    do {
        $input = readInput();

        if ($input < 1 || $input > 20) {
            echo "Invalid input. \n";
        } else {
            $isValid = true;
        }
    } while (!$isValid);

    for ($i = 0; $i < $input; $i++) {
        echo fibonacci($i) . ' ';
    }

    // Removes % from zsh output
    echo PHP_EOL;