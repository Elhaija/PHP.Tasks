<?php
$numeric_string = '2,543.12';

$cleaned_string = str_replace(',', '', $numeric_string);

echo $cleaned_string;
?>