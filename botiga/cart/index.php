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
    <div class="cards">
        <?php
        $totalPriceCart = 0;
        if (isset($_SESSION['products'])) {
            foreach ($_SESSION['products'] as $product) {
                $name = $product['name'];
                $splitDesc = $desc = $product['description'];
                $price = $product['price'];
                $quantity = $product['quantity'];
                if (strlen($desc) > 200) {
                    $splitDesc = str_split($desc, 200)[0] . "...";
                }
                $total = $quantity * intval($price);
                $totalPriceCart += $total;
                if ($quantity > 0)
                    echo ("<div class='product-card'>
                            <p class='name'><b>Product:</b> $name</p>
                            <p class='price'><b>Price:</b> $price x <b>Quantity:</b> $quantity</p>
                            <p class='desc' title='$desc'><b>Description:</b> $splitDesc</p>
                            <p class='total'><b>Total:</b> " . $total . "€</p>
                        </div>");
            }
        } else {
            echo "<p class='error'>No se ha agregado ningún producto</p>";
        }
        ?>
    </div>
    <div id="container-total-price">
        <hr class="line-separator">
        <p id="total-price"><b>Total Price:</b> <?php echo $totalPriceCart; ?>€</p>
        <a href="../"><img class="home" src="../img/home_icon.png" alt="home"></a>
    </div>
</body>

</html>