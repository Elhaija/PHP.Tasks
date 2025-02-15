<?php
function getNextLetter($char) {
    return ($char === 'z') ? 'a' : chr(ord($char) + 1);
}

$char1 = 'a';
$char2 = 'z';

$nextChar1 = getNextLetter($char1);
$nextChar2 = getNextLetter($char2);

echo "Sample Character: '$char1' Expected Output: '$nextChar1'\n";
echo "Sample Character: '$char2' Expected Output: '$nextChar2'\n";
?>
