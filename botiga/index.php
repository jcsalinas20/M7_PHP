<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Botiga</title>
    <?php require("login/session-start.php") ?>
    <link rel="stylesheet" href="css/index.css">
</head>
<body>
    <h1>List of Products</h1>
    <table>
        <tr>
            <th style="width: 10%;">ID</th>
            <th>Name</th>
            <th>Description</th>
            <th style="width: 15%;">Price</th>
            <th style="width: 15%;">Shopping Cart</th>
            <th style="width: 10%;">Trash</th>
        </tr>
        <?php
            $contador = 1;
            foreach ($_SESSION['products'] as $product) {
                $name = $product['name']; $desc = $product['description']; $price = $product['price'];
                echo "<tr>";
                echo "<td style='width: 10%;'>$contador</td>";
                echo "<td>$name</td>";
                echo "<td>$desc</td>";
                echo "<td style='width: 15%;'>$price</td>";
                echo "<td style='width: 15%;'><a href='cart/select-quantity.php?prod=$name'><img src='./img/shopping_cart.png' width='30' /></a></td>";
                echo "<td style='width: 10%;'><a href='product/delete.php?prod=$name'><img src='./img/trash_icon.png' width='30' /></a></td>";
                echo "</tr>";
                $contador++;
            }
        ?>
    </table>
    <input id="cart" type="button" value="Shopping Cart" onclick="window.location.href = 'cart/'">
    <input id="new-product" type="button" value="Add new products" onclick="window.location.href = 'product/'">
</body>
</html>