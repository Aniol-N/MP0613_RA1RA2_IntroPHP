<?php

class P36_NumberAndSumOfNumbers
{
    public function main(): void
    {
        // Write your code here
        $sum = 0;
        $numberOfNumbers = 0;
        
        do {
            echo "Give a number:\n";
            $number = intval(trim(fgets($GLOBALS['STDIN'] ?? STDIN)));

            if ($number != 0) {
                $sum += $number;
                $numberOfNumbers ++;
            }
        } while ($number != 0);

        echo "Number of numbers: " . $numberOfNumbers . "\n";
        echo "Sum of the numbers: " . $sum . "\n";
    }
}
