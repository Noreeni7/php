<?php
// ============================= HANDLES USER SIGNUP AND STORES HASHED PASSWORDS IN DATABASE =================================

// Check if form was sibmitted using post method
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Collect form input values and stores them in variables
    $username = $_POST["username"];  
    $pwd = $_POST["pwd"];
    $email = $_POST["email"];


    try {
        // Include the database connection file
        require_once "dbh.inc.php";

        // Prepare an SQL query to insert user data into the 'users' table
        $query = "INSERT INTO users (username, pwd, email) VALUES (:username, :pwd, :email);";

        // Prepare the SQL statement to prevent SQL injection  
        $stmt = $pdo->prepare($query);

        // Define hashing options — 'cost' determines the strength of encryption
        $options = [
            'cost' => 12
        ];

        // Hash the password before storing it
        $hashedPwd = password_hash($pwd, PASSWORD_BCRYPT, $options);

        // Bind the parameters safely to the prepared statement
        $stmt->bindParam(":username", $username);
        $stmt->bindParam(":pwd", $hashedPwd);
        $stmt->bindParam(":email", $email);

        // Execute the prepared statement and pass the user data
        $stmt->execute();

        // Close the database connection and statement to free up memory
        $pdo = null;
        $stmt = null;

        // Redirect the user back to the home page after successful signup
        header("Location: ../index.php");

        // Stop further code execution
        die();
    } catch (PDOException $e) {
        // Catch and display any databae or query-related errors
        die("Query failed: " . $e->getMessage());
    }
}
else{
    // If form was not submitted correctly, redirect back to home
    header("Location: ../index.php");
}