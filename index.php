<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

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

    // ARRAY type
    $names =[
        "Faith", 
        "Asha", 
        "Frida"
    ];
    
    array_splice($names, 0, 2);
    echo $names[0];
    echo "<br>";
    array_push($names, "Dan");
    print_r($names);
    array_pop($names);
    echo "<br>";
    print_r(array_reverse($names));
    echo "<br>";


    $tasks = [
        "Laundry" => "Daniel",
        "Cooking" => "Emma",
        "Cleaning" => "Clara"
    ];

    echo $tasks["Laundry"];
    echo "<br>";
    print_r($tasks);
    echo "<br>";
    echo count($tasks);
    echo "<br>";


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

    // match
    $a = 2;
    $result = match ($a) {
        1, 0, 3 => "Variable is equal to one",
        2 => "Variable is equal to two",
        default => "None were a match",
    };

    echo $result;

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

    echo "<br>";


    // ================================= SCOPE ================================
    // Global scope - Variables declared outside of functions. Can’t be accessed inside functions directly (unless you use global keyword).
    // Local scope - Variables declared inside a function. Only exist and are usable inside that function.
    // Class Scope - When you write a class, the variables and functions inside it belong to the class scope.

    // Static scope - Special case: variables inside a function that keep their value between calls
    function counter(){
        static $num = 0;
        $num++;
        return $num;
    }
    echo counter();
    echo "<br>";
    echo counter();
    echo "<br>";
    echo counter();

    // ================================= CONSTANTS ================================
    define("PI", 3.14);
    define("NAME", "Dan");

    // ================================= LOOPS ================================
    // for loop
    for ($i=0; $i <= 10; $i++) {
        echo "This is iteration number " . $i . "<br>";
    }

    // while loop
    $i = 4;
    while ($i<11) {
        echo "$i";
        $i++;
    }

    echo "<br>";

    // do..while loop
    $i=4;
    do {
        echo $i;
        $i++;
    } while ($i<4);

    echo "<br>";

    // foreach
    $fruits = ["Apple" => "Green", "Banana" => "Yellow", "Orange" => "Orange"];

    foreach ($fruits as $fruit => $colour) {
        echo "This is a " . $fruit . ", which has a colour of " . "$colour" . "<br>";
    }

?>

    <!-- Sign up -->
    <div class="text-center">
        <h3>Create account</h3>
    </div> 

    <form action="includes/formhandle.inc.php" method="post" class="container p-4 border rounded shadow-sm bg-dark" style="max-width: 400px; margin: 50px auto;">
        <div class="mb-3">
            <input type="text" name="username" placeholder="Username">
        </div>
        <div class="mb-4">
            <input type="password" name="pwd" placeholder="Password">
        </div>
        <div class="mb-4">
            <input type="email" name="email" placeholder="E-mail">
        </div>
        <div class="mb-4">
            <button class="btn btn-warning">Sign Up</button>
        </div>
    </form>

    <!-- Post comment -->
     <div class="text-center">
        <h3>Post comment</h3>
    </div> 

    <form action="includes/formhandle.inc.php" method="post" class="container p-4 border rounded shadow-sm bg-dark" style="max-width: 400px; margin: 50px auto;">
        <div class="mb-3">
            <input type="text" name="username" placeholder="Username">
        </div>
        <div class="mb-4">
            <textarea name="comment_text" placeholder="Write your comment..."></textarea>
        </div>
        <div class="mb-4">
            <button class="btn btn-warning">Post comment</button>
        </div>
    </form>

    <!-- Change account -->
    <div class="text-center">
        <h3>Change account</h3>
    </div> 

    <form action="includes/userupdate.inc.php" method="post" class="container p-4 border rounded shadow-sm bg-dark" style="max-width: 400px; margin: 50px auto;">
        <div class="mb-3">
            <input type="text" name="username" placeholder="Username">
        </div>
        <div class="mb-4">
            <input type="password" name="pwd" placeholder="Password">
        </div>
        <div class="mb-4">
            <input type="email" name="email" placeholder="E-mail">
        </div>
        <div class="mb-4">
            <button class="btn btn-warning">Update</button>
        </div>
    </form>

    <!-- Delete account  -->
    <div class="text-center">
        <h3>Delete account</h3>
    </div>

    <form action="includes/userdelete.inc.php" method="post" class="container p-4 border rounded shadow-sm bg-dark" style="max-width: 400px; margin: 50px auto;">
        <div class="mb-3">
            <input type="text" name="username" placeholder="Username">
        </div>
        <div class="mb-4">
            <input type="password" name="pwd" placeholder="Password">
        </div>
        <div class="mb-4">
            <button class="btn btn-warning">Delete</button>
        </div>
    </form>

    <!-- Search form -->
    <div class="text-center">
        <h3>Search account</h3>
    </div>

    <form action="search.php" method="post" class="container p-4 border rounded shadow-sm bg-dark" style="max-width: 400px; margin: 50px auto;">
        <div class="mb-3">
            <input id="search" type="text" name="usersearch" placeholder="Search...">
        </div>
        <div class="mb-4">
            <button class="btn btn-warning">Search</button>
        </div>
    </form>



</body>
</html>