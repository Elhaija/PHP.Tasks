<?php
function isMultipleOfThree($number) {
    return ($number % 3 == 0) ? 'true' : 'false';
}

$number = 20;

echo isMultipleOfThree($number);
?>