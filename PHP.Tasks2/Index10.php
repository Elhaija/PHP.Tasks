<?php
$n = 5;

for ($i = 1; $i <= $n; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        echo chr(64 + $j) . " "; 
    }
    echo "\n";
}

for ($i = $n - 1; $i >= 1; $i--) {
    for ($j = 1; $j <= $i; $j++) {
        echo chr(64 + $j) . " "; 
    }
    echo "\n";
}
?>