<?php
 $numbers = [1 , 2 , 3, 4 , 5];
 $position = 4;
 $newItem = '$';
 array_splice($numbers, $position - 1, 0, $newItem);
 echo implode(" ", $numbers);
?>