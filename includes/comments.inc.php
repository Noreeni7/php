<?php
// =============================== HANDLES COMMENT SUBMISSION AND DATABASE INSERTION LOGIC ===========================

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