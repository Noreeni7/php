<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php
    //  ================== VARIABLES ============ 
    $name = "David";
    echo $name;

    //  ================== DATA TYPES ============ 
    // Scalar types (contains one value)
    $string ="David";
    $int = 123987;
    $float = 2.8985;
    $bool = false;

    // Array type
    $names =["Faith", "Asha", "Frida"];

    // Object types

    // ============ BUILT-IN SUPERGLOBAL VARIABLES =======
    echo $_SERVER["DOCUMENT_ROOT"];
    echo "<br>";
    echo $_SERVER["PHP_SELF"];
    echo "<br>";
    echo $_SERVER["SERVER_NAME"];
    echo "<br>";
    echo $_SERVER["REQUEST_METHOD"];
    echo "<br>";
    $_GET[""];
    echo "<br>";
    $_REQUEST[""];
    echo "<br>";
    $_FILES[""];
    echo "<br>";
    $_COOKIE[""];
    echo "<br>";
    $_SESSION[""];
    echo "<br>";
    $_ENV[""];
    ?>

    <p>Hi! My name is <?php echo $string; ?>, and I am a teacher</p>


    <main>
        <form action="includes/formhandler.php" method="post">
            <label for="firstName">Firstname?</label>
            <input id="firstName" type="text" name="firstname" placeholder="First Name...">

            <label for="secondName">Secondname?</label>
            <input id="secondName" type="text" name="secondname" placeholder="Second Name...">

            <label for="favouritepet">Favourite pet?</label>
            <select name="favouritepet" id="favouritepet">
                <option value="none">None</option>
                <option value="dog">Dog</option>
                <option value="cat">Cat</option>
                <option value="bird">Bird</option>
            </select>

            <button type="submit">Submit</button>
        </form>

    </main>
    
<?php
    // ===================== Operators ======================
    // String operators
    $a = "Hello";
    $b = "World";
    $c = $a . " " . $b;
    echo $c;

    echo "<br>";

    // Arithmetic operators
    echo 1 / 2;
    echo "<br>";
    echo 10 % 3;
    echo "<br>";
    echo 10 ** 3;
    echo "<br>";

    // Assignment operators
    $z = 2;
    $z += 3;
    echo $z;
    echo "<br>";

    $d =2;
    $d *=2;
    echo $d;

    // Comparison operator
    $a = 5;
    $b = 4;

    if($a == $b){
        echo "This is true";
    }

    echo "<br>";

    if($a === $b){
        echo "This is true";
    };

    if($a != $b){
        echo "This is true";
    };

    echo "<br>";

    if($a <> $b){
        echo "This is true";
    };

    echo "<br>";

    if($a > $b){
        echo "This is true";
    };


    // Logical operators
    $a = 4;
    $b = 3;

    $c = 6;
    $d = 7;

    if($a === $b || $c === $d && $c === $a){
        echo "true";
    };
    echo "<br>";

    // Increamenting/decreamenting operators
    $a = 1;
    echo ++$a;
    echo "<br>";

    $b = 1;
    echo --$b;

    echo "<br>";

    // switch
    $a = 3;
    
    switch ($a) {
        case 2;
            echo "This first condition is true";
            break;
        case 3;
            echo "This second condition is true";
            break;
        case 1;
            echo "This last condition is true";
            break;
        default;
            echo "None of the conditions are true";
            break;
    }

    echo "<br>";

    // Using else if
    $bool = true;
    $a = 1;
    $b = 4;



    if( $a < $b && !$bool ){
        echo "First condition is true";
    } else if( $a < $b && $bool){
        echo "Second condition is true";
    } else {
        echo "None of the conditions are true";
    }
?>



</body>
</html>