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