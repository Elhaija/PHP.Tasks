<?php
function isPalindrome($string) {
    $cleanString = preg_replace("/[^A-Za-z0-9]/", '', strtolower($string));
    
    return $cleanString === strrev($cleanString);
}
$input = "Eva, can I see bees in a cave?";
if (isPalindrome($input)) {
    echo "Yes, it is a palindrome";
} else {
    echo "No, it is not a palindrome";
}
?>