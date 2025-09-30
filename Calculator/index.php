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
        <input type="number" name="num02" placeholder="First number">
        <button>Calculate</button>
    </form>

    <?php 
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            
            // grab data from inputs
            $firstnumber = filter_input(INPUT_POST, "num01", FILTER_SANITIZE_NUMBER_FLOAT);
            $secondnumber = filter_input (INPUT_POST, "num02", FILTER_SANITIZE_NUMBER_FLOAT);
        }
    ?>

</body>
</html>