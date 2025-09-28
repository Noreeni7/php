<?php

// var_dump($_SERVER["REQUEST_METHOD"]);

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $first = htmlspecialchars($_POST["firstname"]);
    $second = htmlspecialchars($_POST["secondname"]);
    $pet = htmlspecialchars($_POST["favouritepet"]);


    echo "This is the data that the user subitted:";
    echo "<br>";
    echo $first;
    echo "<br>";
    echo $second;
    echo "<br>";
    echo $pet;
    
}