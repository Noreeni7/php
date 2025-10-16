
 <!-- * comments.inc.php
 * 
 * This file processes comment form submissions sent via POST.
 * It inserts the user's name and comment text into the 'comments' table
 * using a prepared statement to prevent SQL injection.
 * 
 * If accessed directly (not via POST), it redirects back to the index page.
  -->


<?php

    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $username = $_POST["username"];
        $comment_text = $_POST["comment_text"];

        try {
            require_once "dbh.inc.php";

            $query = "INSERT INTO comments (username, comment_text) VALUES (:username, :comment_text)";

            $stmt = $pdo->prepare($query);

            $stmt->bindParam(":username", $username);
            $stmt->bindParam(":comment_text",$comment_text);

            $stmt->execute();

            $stmt = null;
            $pdo = null;

            header("Location: ../index.php");
            exit();

        } catch (PDOException $e) {
            die("Query failed: " . $e->getMessage());
        }
    }
    else{
        header("Location: ../index.php");
        exit();
    }

?>