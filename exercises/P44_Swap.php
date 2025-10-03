<?php

class P44_Swap
{
    public function main(): void
    {
        $array = [1, 3, 5, 7, 9];
        // Write your code here
        $whereFrom = trim(fgets($GLOBALS['STDIN'] ?? STDIN));
        $whereTo = trim(fgets($GLOBALS['STDIN'] ?? STDIN));

        $temp = $array[$whereFrom];
        $array[$whereFrom] = $array[$whereTo];
        $array[$whereTo] = $temp;

        foreach ($array as $value) {
            echo "$value\n";
        }
    }
}
