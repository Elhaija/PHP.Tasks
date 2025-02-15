<?php
function removeLeadingZeros($number) {
    return ltrim($number, '0');
}

$originalNumber = '0000657022.24';
$cleanedNumber = removeLeadingZeros($originalNumber);

echo "Expected Output: " . $cleanedNumber . "\n";
?>
