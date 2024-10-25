<?php
// db_connection.php

// Database connection details
$dsn = 'mysql:host=localhost;dbname=kakdoctor';
$username = 'root';
$password = '';

try {
    // Connect to the database
    $pdo = new PDO($dsn, $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully"; // Optional success message
} catch (PDOException $e) {
    echo 'Connection failed: ' . $e->getMessage();
    exit;
}
?>