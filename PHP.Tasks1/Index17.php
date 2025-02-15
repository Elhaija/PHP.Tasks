<?php
function isInRange($number) {
    return ($number >= 20 && $number <= 50) ? 'true' : 'false';
}

$number = 50;

echo isInRange($number);
?>