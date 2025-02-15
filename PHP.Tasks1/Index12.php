<?php
function isArmstrong($num) {
    $sum = 0;
    $temp = $num;
    $numDigits = strlen((string)$num); 

    while ($temp > 0) {
        $digit = $temp % 10; 
        $sum += pow($digit, $numDigits); 
        $temp = (int)($temp / 10); 
    }

    return $sum == $num;
}
$number = 407;
if (isArmstrong($number)) {
    echo "$number is an Armstrong Number";
} else {
    echo "$number is not an Armstrong Number";
}
?>