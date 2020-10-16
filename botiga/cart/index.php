<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopping Cart</title>
    <?php require("../login/session-start.php") ?>
    <link rel="stylesheet" href="../css/cart.css">
</head>
<body>
    <?php
    foreach ($_SESSION['products'] as $product) {
        $name = $product['name']; $desc = $product['description']; $price = $product['price']; $quantity = $product['quantity'];
        if ($quantity > 0)
            echo (
                "<div class='product-card'>
                    <p class='name'>Product: <b>$name</b></p>
                    <p class='quantity'>Quantity: <b>$quantity</b></p>
                </div>"
            );
    }
    ?>
</body>
</html>