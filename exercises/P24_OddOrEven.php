<?php

class P24_OddOrEven
{
    public function main(): void
    {
        // Write your code here
        $number = trim(string: fgets(stream: $GLOBALS['STDIN'] ?? STDIN));

        echo "Give a number: \n";
        if ($number % 2 == 0) {
            echo "Number is even. \n";
        } else {
            echo "Number is odd. \n";
        }
    }
}
