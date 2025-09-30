<?php

class P30_CarryOn
{
    public function main(): void
    {
        // Write your code here
        do {
            echo "Carry on?\n";
            $answer = trim(fgets($GLOBALS['STDIN'] ?? STDIN));
        } while ($answer !== "no");
    }
}
