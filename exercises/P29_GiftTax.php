<?php

class P29_GiftTax
{
    public function main(): void
    {
        // Write your code here
        echo "Value of the gift? ";
        $value = trim(fgets($GLOBALS['STDIN'] ?? STDIN));
        $value = floatval($value);

        if ($value < 5000) {
            echo "No tax!";
        } elseif ($value >= 5000 && $value < 25000) {
            $tax = 100 + ($value - 5000) * 0.08;
            echo "Tax: " . number_format($tax, 1, '.', '');
        } elseif ($value >= 25000 && $value < 55000) {
            $tax = 1700 + ($value - 25000) * 0.10;
            echo "Tax: " . number_format($tax, 1, '.', '');
        } elseif ($value >= 55000 && $value < 200000) {
            $tax = 4700 + ($value - 55000) * 0.12;
            echo "Tax: " . number_format($tax, 1, '.', '');
        } elseif ($value >= 200000 && $value < 1000000) {
            $tax = 22100 + ($value - 200000) * 0.15;
            echo "Tax: " . number_format($tax, 1, '.', '');
        } else { // $value >= 1000000
            $tax = 142100 + ($value - 1000000) * 0.17;
            echo "Tax: " . number_format($tax, 1, '.', '');
        }
    }
}
