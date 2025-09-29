<?php

class P21_LargerThanOrEqualTo
{
    public function main(): void
    {
        // Write your code here
        // Prompt the user for input
        echo "Give the first number: \n";
        $firstNumberInput = trim(string: fgets(stream: $GLOBALS['STDIN'] ?? STDIN));
        // Get input from the user
        echo "Give the second number: \n";
        $secondNumberInput = trim(string: fgets(stream: $GLOBALS['STDIN'] ?? STDIN));
        // Prompt the user for input
        // Get input from the user
        // Check year value
        if ((int)$firstNumberInput > (int)$secondNumberInput) {
            echo "\n Greater number is: " . $firstNumberInput . "\n";
        } elseif ((int)$firstNumberInput < (int)$secondNumberInput) {
            echo "\n Greater number is: " . $secondNumberInput . "\n";
        } else {
            echo "\n The numbers are equal!\n";
        }
    }
}
