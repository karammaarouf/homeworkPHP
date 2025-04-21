<?php
session_start();

if (!isset($_SESSION['form_data'])) {
    header("Location: validation.php");
    exit();
}

$data = $_SESSION['form_data'];
unset($_SESSION['form_data']);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Submitted Data</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <h2>Submitted Information</h2>
    <div class="data-display">
        <p><strong>Username:</strong> <?= htmlspecialchars($data['username']) ?></p>
        <p><strong>Email:</strong> <?= htmlspecialchars($data['email']) ?></p>
        <p><strong>Age:</strong> <?= htmlspecialchars($data['age']) ?></p>
        <a href="validation.php" class="back-link">Back to Form</a>
    </div>
</body>
</html>