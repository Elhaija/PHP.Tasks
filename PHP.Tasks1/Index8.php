<?php
function convertToUppercase($array) {
    return array_map('strtoupper', $array);
}

$colors = array("red", "blue", "white", "yellow");

$uppercaseColors = convertToUppercase($colors);

print_r($uppercaseColors);
?>