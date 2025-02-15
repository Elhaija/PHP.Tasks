<?php
$num_terms = 10; 

$fib1 = 0;
$fib2 = 1;

echo $fib1 . ', ' . $fib2;

for ($i = 3; $i <= $num_terms; $i++) {
    $next_fib = $fib1 + $fib2;
    
    echo ', ' . $next_fib;
    
    $fib1 = $fib2;
    $fib2 = $next_fib;
}
?>