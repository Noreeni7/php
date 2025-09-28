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
    $_FILES[];
    echo "<br>";
    $_COOKIE[];
    echo "<br>";
    $_SESSION[];
    echo "<br>";
    $_ENV[];
    ?>

    <p>Hi! My name is <?php echo $string; ?>, and I am a teacher</p>

    





</body>
</html>