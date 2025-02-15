<?php
function checkSumEquals30($num1, $num2) {
    $sum = $num1 + $num2;
    return ($sum == 30) ? $sum : 'false';
}

$firstInteger = 10;
$secondInteger = 10;

echo checkSumEquals30($firstInteger, $secondInteger);
?>