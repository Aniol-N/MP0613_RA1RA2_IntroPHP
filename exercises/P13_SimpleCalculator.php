<?php

class P13_SimpleCalculator
{
    public function main(): void
    {
        // Define two numbers
        $numA = 8;
        $numB = 2;

        // Perform and output the calculations
        // Write the program here

        echo $numA . " + " . $numB . " = " . ($numA + $numB) . "\n";
        echo $numA . " - " . $numB . " = " . ($numA - $numB) . "\n";
        echo $numA . " * " . $numB . " = " . ($numA * $numB) . "\n";
        echo $numA . " / " . $numB . " = " . number_format($numA / $numB, 1) . "\n";
    }
}
