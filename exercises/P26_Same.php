<?php

class P26_Same
{
    public function main(): void
    {
        // Write your code here
        echo "Enter the first string: ";
        $input1 = trim(string: fgets(stream: $GLOBALS['STDIN'] ?? STDIN));
        echo "Enter the second string: ";
        $input2 = trim(string: fgets(stream: $GLOBALS['STDIN'] ?? STDIN));
        if ($input1 == $input2) {
            echo "Same";
        } else {
            echo "Different";
        }
    }
}
