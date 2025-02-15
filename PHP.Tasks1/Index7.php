<?php
$array1 = array("color" => "red", 2, 4);
$array2 = array("a", "b", "color" => "green", "shape" => "trapezoid", 4);

// دمج المصفوفتين
$result = array_merge($array1, $array2);

// طباعة النتيجة
print_r($result);
?>