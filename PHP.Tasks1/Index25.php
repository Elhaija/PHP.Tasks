<?php
function formatTime($numericString) {
    if (strlen($numericString) == 6) {
        return substr($numericString, 0, 2) . ":" . substr($numericString, 2, 2) . ":" . substr($numericString, 4, 2);
    }
    return "Invalid input";
}

$numericString = "085119";
$formattedTime = formatTime($numericString);

echo "Expected Output: " . $formattedTime;
?>