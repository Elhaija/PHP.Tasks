<?php
function insertString($original, $insert, $position) {
    return substr_replace($original, $insert . ' ', $position, 0);
}

$originalString = 'The brown fox';
$insertString = 'quick';
$position = strpos($originalString, 'brown');
$newString = insertString($originalString, $insertString, $position);

echo "Expected Output: " . $newString . "\n";

function getFirstWord($sentence) {
    return strtok($sentence, ' ');
}

$sentence = 'The quick brown fox';
$firstWord = getFirstWord($sentence);

echo "Expected Output: " . $firstWord . "\n";
?>
