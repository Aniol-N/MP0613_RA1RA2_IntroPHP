<?php

class P37_AverageOfNumbers
{
    public function main(): void
    {
        // Write your code here
        $sum = 0;
        $count = 0;

        do {
            echo "Give a number:\n";
            $number = intval(trim(fgets($GLOBALS['STDIN'] ?? STDIN)));

            if ($number != 0) {
                $sum += $number;
                $count++;
            }
        } while ($number != 0);

        if ($count > 0) {
            $average = $sum / $count;
            echo "Average of the numbers: " . $average . "\n";
        } else {
            echo "Average of the numbers: 0\n";
        }
    }
}
