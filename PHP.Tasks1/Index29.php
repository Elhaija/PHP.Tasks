<?php
function getLastThreeCharacters($string) {
    return substr($string, -3);
}

$string = "info@orange.com";
$lastThreeChars = getLastThreeCharacters($string);

echo "Expected Output: " . $lastThreeChars;
?>