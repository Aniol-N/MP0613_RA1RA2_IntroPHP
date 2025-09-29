<?php

class P23_AbsoluteValue
{
    public function main(): void
    {
        // Write your code here
        $input = trim(string: fgets(stream: $GLOBALS['STDIN'] ?? STDIN));
        echo abs($input). "\n";
    }
}
