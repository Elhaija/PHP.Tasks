<?php
function removeDuplicates($array) {
    return array_values(array_unique($array));
}

$array1 = array(2, 4, 7, 4, 8, 4);

$result = removeDuplicates($array1);

print_r($result);

?>