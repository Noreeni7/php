<?php

// var_dump($_SERVER["REQUEST_METHOD"]);

// Check if the form was submitted using the POST method
if($_SERVER["REQUEST_METHOD"] == "POST"){

    // Get submitted form data and sanitize it to prevent XSS
    $first = htmlspecialchars($_POST["firstname"]);
    $second = htmlspecialchars($_POST["secondname"]);
    $pet = htmlspecialchars($_POST["favouritepet"]);

    // Display submitted data back to the user
    echo "This is the data that the user subitted:";
    echo "<br>";
    echo $first;
    echo "<br>";
    echo $second;
    echo "<br>";
    echo $pet;
    
    // Redirect the user back to the homepage (index.php)
    // In both cases (if condition is met or not), the user is sent to index.php
    header("Location: ../index.php");
}
else{
    header("Location: ../index.php");
}