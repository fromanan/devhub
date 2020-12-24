<?php

require __DIR__ . "/../vendor/autoload.php";

$site = new StarForged\Site();
$site->setLogo("StarForged", "Engine Specs");
$site->setVersion("Version 1.0.00 – 3/6/2020");
$site->setTagline("The StarForged Advanced RPG Engine will be made available<br>for download as a versioned, compiled binary .dll file soon.");

// Debugging
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);