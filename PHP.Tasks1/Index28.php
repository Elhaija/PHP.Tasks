<?php
function extractUsername($email) {
    return strstr($email, '@', true);
}

$email = "info@orange.com";
$username = extractUsername($email);

echo "Expected Output: " . $username;
?>
