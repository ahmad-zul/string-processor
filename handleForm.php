<?php

require "StringProcessor.php";

$processor = new StringProcessor();

$words = $_POST["words"];

$capitalize = $processor->capitalize($words);
$capitalizeAlt = $processor->capitalizeAlternate($words);
$createCSV = $processor->createCSVFile($words);

$response = "<!doctype html>";
$response .= "<html><head><title>String Processor Result</title></head>";
$response .= "<body>";
$response .= "<h1>Result</h1>";
$response .= $capitalize;
$response .= "<br />";
$response .= $capitalizeAlt;
$response .= "<br />";
$response .= $createCSV;
$response .= "<br />";
$response .= "<br />";
$response .= "<a href='./index.php'>Back to main page</a>";
$response .= "</body>";
$response .= "</html>";

echo $response;
?>