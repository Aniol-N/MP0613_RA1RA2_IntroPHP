<?php

class P40_CountingToHundred
{
    public function main(): void
    {
        // Write your program here
        $stdin = $GLOBALS['STDIN'] ?? STDIN;
        $input = trim(fgets($stdin));
        $number = intval($input);
        for ($i = $number; $i <= 100; $i++) {
            echo $i . "\n";
        }
    }
}
