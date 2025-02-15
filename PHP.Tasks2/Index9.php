<?php
$n = 5; 

$number = 1;

for ($i = 1; $i <= $n; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        echo $number . " ";
        
        $number++;
    }
    echo "\n";
}
?>