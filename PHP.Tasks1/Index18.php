<?php
function findLargest($num1, $num2, $num3) {
    return max($num1, $num2, $num3);
}

$numbers = [1, 5, 9];

echo findLargest($numbers[0], $numbers[1], $numbers[2]);
?>