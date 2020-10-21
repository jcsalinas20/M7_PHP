<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Product To Shopping Cart</title>
    <?php require("../login/session-start.php") ?>
    <link rel="stylesheet" href="../css/product.css">
</head>
<body>
    <a href="../"><img class="home" src="../img/home_icon.png" alt="home"></a>
    <form action="./submit-quantity.php" method="post">
        <label for="lname">Product:</label>
        <select name="prod" id="prod">
            <?php
            $myfile = fopen("../txt/products.txt", "r") or die("Unable to open file!");
            while(!feof($myfile)) {
                $line = fgets($myfile);
                if ($line != "") {
                    list($name) = explode(",", $line);
                    if ($name == $_GET['prod']) echo "<option selected value='$name'>$name</option>";
                    else echo "<option value='$name'>$name</option>";
                }
            }
            ?>
        </select>
        <label for="lname">Quantity:</label>
        <input type="number" name="quantity" id="quantity" placeholder="quantity" required>
        <input type="submit" value="Add To Cart">
    </form>
</body>
</html>