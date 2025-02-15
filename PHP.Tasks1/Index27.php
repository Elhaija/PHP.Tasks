<?php
function extractFileName($url) {
    return basename(parse_url($url, PHP_URL_PATH));
}

$url = "www.orange.com/index.php";
$fileName = extractFileName($url);

echo "Expected Output: " . $fileName;
?>
