<?php
// insert_doctor.php

// Include the database connection file
include 'connection.php';

// Enable error reporting for debugging
error_reporting(E_ALL);
ini_set('display_errors', 1);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    if (isset($_POST['topbar_name'])) {
        $name = $_POST['topbar_name'];
    } else {
        echo "No data received!";
        exit;
    }

    // Prepare the SQL statement
    $sql = "INSERT INTO topbar (name) VALUES (:name)";
    $stmt = $pdo->prepare($sql);

    // Bind parameters
    $stmt->bindParam(':name', $name);

    // Execute the statement and check for success
    if ($stmt->execute()) {
        echo "Topbar information successfully inserted!";
    } else {
        echo "Failed to insert topbar information.";
        print_r($stmt->errorInfo());
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Topbar Information Form</title>
</head>
<body>
    <h2>Topbar Information Form</h2>
    <form action="admintopbar.php" method="POST"> <!-- Corrected form action -->
        <label for="name">Topbar Name:</label>
        <input type="text" id="name" name="topbar_name" required><br><br>
        <button type="submit">Submit</button>
    </form>
</body>
</html>