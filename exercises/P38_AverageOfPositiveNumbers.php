<?php

class P38_AverageOfPositiveNumbers
{
    public function main(): void
    {
        // Write your program here
        $sum = 0;
        $count = 0;

        do {
            $number = intval(trim(fgets($GLOBALS['STDIN'] ?? STDIN)));

            if ($number > 0) {
                $sum += $number;
                $count++;
            }
        } while ($number != 0);

        if ($count > 0) {
            $average = $sum / $count;
            echo $average . "\n";
        } else {
            echo "Cannot calculate the average\n";
        }
    }
}
