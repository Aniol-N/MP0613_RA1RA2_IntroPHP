<?php

class P32_OnlyPositives
{
    public function main(): void
    {
        // Write your code here
        do {
            echo "Give a number:\n";
            $number = intval(trim(fgets($GLOBALS['STDIN'] ?? STDIN)));

            if ($number < 0) {
                echo "Unsuitable number\n";
            } elseif ($number > 0) {
                $result = pow($number, 2);
                echo $result . "\n";
            }
        } while ($number != 0);
    }
}
