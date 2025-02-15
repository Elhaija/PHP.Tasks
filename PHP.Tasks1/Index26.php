<?php
function checkWordInSentence($sentence, $word) {
    if (stripos($sentence, $word) !== false) {
        return "Word Found!";
    }
    return "Word Not Found!";
}

$sentence = "I am a full stack developer at orange coding academy";
$word = "Orange";
$result = checkWordInSentence($sentence, $word);

echo "Expected Output: " . $result;
?>
