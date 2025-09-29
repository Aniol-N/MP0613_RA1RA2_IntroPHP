<?php

class P25_Password
{
    public function main(): void
    {
        // Write your code here
        echo "Password?";
        $pw = trim(string: fgets(stream: $GLOBALS['STDIN'] ?? STDIN));
        if ($pw == "Caput Draconis") {
            echo "Welcome!";
        } else {
            echo "Off with you!";
        }
    }
}
