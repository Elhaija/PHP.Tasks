<?php
function calculator($num1, $num2, $operation) {
    switch ($operation) {
        case 'add':
            return $num1 + $num2;
        case 'subtract':
            return $num1 - $num2;
        case 'multiply':
            return $num1 * $num2;
        case 'divide':
            return ($num2 != 0) ? $num1 / $num2 : "Error: Division by zero!";
        default:
            return "Invalid operation!";
    }
}

$num1 = 10;
$num2 = 5;
$operation = 'multiply'; 

echo "Result: " . calculator($num1, $num2, $operation);
?>