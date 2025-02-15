<?php
$temperatures = [78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 
                 68, 62, 73, 72, 65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73];

$averageTemp = array_sum($temperatures) / count($temperatures);
echo "Average Temperature is: " . round($averageTemp, 1) . "<br>";

sort($temperatures);

$lowestTemps = array_slice($temperatures, 0, 5);
echo "List of five lowest temperatures: " . implode(", ", $lowestTemps) . "<br>";

$highestTemps = array_slice($temperatures, -5);
echo "List of five highest temperatures: " . implode(", ", $highestTemps) . "<br>";
?>