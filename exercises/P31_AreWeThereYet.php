<?php

class P31_AreWeThereYet
{
    public function main(): void
    {
        // Write your code here
        do {
            echo "Give a number:\n";
            $answer = trim(fgets($GLOBALS['STDIN'] ?? STDIN));
        } while ($answer !== "4");
    }
}
