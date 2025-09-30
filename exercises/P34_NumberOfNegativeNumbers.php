<?php

class P34_NumberOfNegativeNumbers
{
    public function main(): void
    {
        // Write your code here
        $count = 0;
        
        do {
            echo "Give a number:\n";
            $number = intval(trim(fgets($GLOBALS['STDIN'] ?? STDIN)));
            
            if ($number < 0) {
                $count++;
            }
        } while ($number != 0);
        
        echo "Number of negative numbers: " . $count . "\n";
    }
}
