<?php
$string = 'The quick brown fox jumps over the lazy dog';

$words = explode(' ', $string);

$first_five_words = array_slice($words, 0, 5);

$selected_words = implode(' ', $first_five_words);

echo $selected_words;
?>