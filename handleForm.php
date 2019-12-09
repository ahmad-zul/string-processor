<?php

require "StringProcessor.php";

$processor = new StringProcessor();

$words = $_POST["words"];

$capitalize = $processor->capitalize($words);
$capitalizeAlt = $processor->capitalizeAlternate($words);
$createCSV = $processor->createCSVFile($words);

echo $capitalize;
echo "<br>";
echo $capitalizeAlt;
echo "<br>";
echo $createCSV;

?>