<?php
session_start();

class P49_SetLanguagePreference
{
    private array $allowedLanguages = ['en', 'es', 'fr', 'de'];

    public function main(): void
    {
        // Write your code here
        $languageChoice = $_GET["lang"] ?? '';

        if (in_array($languageChoice, $this->allowedLanguages, true)) {
            $_SESSION["lang"] = $languageChoice;
        } else {
            $_SESSION["lang"] = "en";
        }

        echo "Language set to {$_SESSION["lang"]}";
    }
}
