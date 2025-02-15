<?php
function stringToArray($string) {
    return explode(" ", $string);
}

$string = "Twinkle, twinkle, little star.";
$array = stringToArray($string);

echo "Expected Result: ";
var_dump($array);
?>
