<?php

class P35_SumOfNumbers
{
    public function main(): void
    {
        // Write your code here
        $sum = 0;
        
        do {
            echo "Give a number:\n";
            $number = intval(trim(fgets($GLOBALS['STDIN'] ?? STDIN)));
            
            if ($number != 0) {
                $sum += $number;
            }
        } while ($number != 0);
        
        echo "Sum of the numbers: " . $sum . "\n";
    }
}