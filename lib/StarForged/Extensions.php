<?php


namespace StarForged;


use JetBrains\PhpStorm\Pure;

class Extensions
{
    #[Pure] public static function GetPageName() : string
    {
        return basename($_SERVER['PHP_SELF']);
    }

    public static function GetChain() : string
    {
        return substr(strtok($_SERVER["REQUEST_URI"], '?'), 1);
    }

    public static function LoadJson($filename)
    {
        return json_decode(file_get_contents($filename), true);
    }
}