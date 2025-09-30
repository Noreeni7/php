<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/main.css">
    <title>Document</title>
</head>
<body>
    
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method = "post">
        <input type="number" name="num01" placeholder="First number">
        <select name="operator">
            <option value="add">+</option>
            <option value="subtract">-</option>
            <option value="divide">/</option>
            <option value="multiply">*</option>
        </select>
        <input type="" name="num02" placeholder="Second number">
        <button type="submit">Calculate</button>
    </form>

    <?php 
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            
            //Grab data from inputs
            $firstnumber = filter_input(INPUT_POST, "num01", FILTER_SANITIZE_NUMBER_FLOAT);
            $secondnumber = filter_input (INPUT_POST, "num02", FILTER_SANITIZE_NUMBER_FLOAT);
            $operator = htmlspecialchars($_POST["operator"]);

            // Error handlers
            $errors = false;

            if(empty($firstnumber) || empty($secondnumber) || empty($operator)){
                echo "<p class='calc-error'> Fill in all fields!</p>";
                $errors = true;
            }

            if(!is_numeric($firstnumber) || !is_numeric($secondnumber)){
                echo "<p class='calc-error'> Only type numbers!</p>";
                $errors = true;
            }

            if(!$errors){
                $value = 0;
                switch ($operator){
                    case "add":
                        $value = $firstnumber + $secondnumber;
                        break;
                    case "subtract":
                        $value = $firstnumber - $secondnumber;
                        break;
                    case "divide":
                        $value = $firstnumber / $secondnumber;
                        break;
                    case "multiply":
                        $value = $firstnumber * $secondnumber; 
                        break;
                    default:
                        echo "<p class='calc-error'> Something went HORRIBLY wrong!</p>";
                }
                echo "<p class='calc-error'> Result = $value </p>";
            }
        }
    ?>

</body>
</html>