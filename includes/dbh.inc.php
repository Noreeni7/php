<?php
$dsn = "mysql:host=localhost;dbname=mydatabase";
$dbusername = "root";
$dbpassword = "Sbing254";

// Database connection with error handling
try {
    $pdo = new PDO($dsn, $dbusername, $dbpassword);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully!";
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}