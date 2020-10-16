<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Product To Shopping Cart</title>
    <style>
        html, body {
            height: 80%;
        }
        body {
            display: flex;
            background-color: lightblue;
        }
        form {    
            margin: auto;
            display: flex;
            background-color: white;
            padding: 20px;
            border: 2px solid black;
            border-radius: 5px;    
            flex-flow: column wrap;
            font-family: sans-serif;
        }
        label {
            font-size: 20px;
        }
        input[type='number'], select {
            padding: 2px 7px;
            margin-top: 1px;
            margin-bottom: 10px;
            font-size: 19px;
        }
        input[type='submit'] {
            font-size: 22px;
            margin-top: 20px;
            background-color: black;
            border: 2px solid red;
            color: white;
            border-radius: 25px;
        }
    </style>
    <?php require("../login/session-start.php") ?>
</head>
<body>
    <form action="./submit-quantity.php" method="post">
        <label for="lname">Product:</label>
        <select name="prod" id="prod">
            <?php
            foreach ($_SESSION['products'] as $product) {
                $name = $product['name'];
                if ($name == $_GET['prod']) echo "<option selected value='$name'>$name</option>";
                else echo "<option value='$name'>$name</option>";
            }
            ?>
        </select>
        <label for="lname">Quantity:</label>
        <input type="number" name="quantity" id="quantity" placeholder="quantity" required>
        <input type="submit" value="Add To Cart">
    </form>
</body>
</html>