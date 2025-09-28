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
    





</body>
</html>