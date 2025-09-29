<?php

class P22_GradesAndPoints
{
    public function main(): void
    {
        // Write your code here
        echo "Give points [0-100]: ";
        $input = trim(fgets(stream: $GLOBALS['STDIN'] ?? STDIN));
        $points = (int)$input;

        echo "Grade: ";

        switch (true) {
            case ($points < 0):
                echo "impossible!";
                break;
            case ($points <= 49):
                echo "failed";
                break;
            case ($points >= 50 && $points <= 59):
                echo "1";
                break;
            case ($points >= 60 && $points <= 69):
                echo "2";
                break;
            case ($points >= 70 && $points <= 79):
                echo "3";
                break;
            case ($points >= 80 && $points <= 89):
                echo "4";
                break;
            case ($points >= 90 && $points <= 100):
                echo "5";
                break;
            case ($points > 100):
                echo "incredible!";
                break;
        }
    }
}
