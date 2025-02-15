<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $inputString = $_POST["inputString"];
    
    $uppercase = strtoupper($inputString);
    $lowercase = strtolower($inputString);
    $firstUpper = ucfirst(strtolower($inputString));
    $titleCase = ucwords(strtolower($inputString));
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>String Case Converter</title>
</head>
<body>
    <form method="post">
        <label for="inputString">Enter a string:</label>
        <input type="text" name="inputString" required>
        <button type="submit">Convert</button>
    </form>
    
    <?php if ($_SERVER["REQUEST_METHOD"] == "POST"): ?>
        <h2>Converted Strings:</h2>
        <p><strong>Uppercase:</strong> <?php echo htmlspecialchars($uppercase); ?></p>
        <p><strong>Lowercase:</strong> <?php echo htmlspecialchars($lowercase); ?></p>
        <p><strong>First letter uppercase:</strong> <?php echo htmlspecialchars($firstUpper); ?></p>
        <p><strong>Title Case:</strong> <?php echo htmlspecialchars($titleCase); ?></p>
    <?php endif; ?>
</body>
</html>