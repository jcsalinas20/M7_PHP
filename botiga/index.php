<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Botiga</title>
    <?php require("login/session-start.php") ?>
    <style>
        body {
            background-color: #d1d1d1;
        }
        h1 {
            font-family: sans-serif;
            text-align: center;
            text-shadow: 0 0 3px red;
        }
        table {
            display: flex;
            width: 100%;
            box-shadow: 0 0 8px black;
        }
        tbody {
            width: 100%;
        }
        tr {
            width: 100%;
            display: flex;
            background-color: #6f6f6f;
            border: 1px solid red;
        }
        th {
            background-color: #212121;
            color: white;
            font-family: sans-serif;
            font-size: 25px;
            width: 30%;
        }
        td {
            width: 30%;
            background-color: #6f6f6f;
            color: white;
            text-align: center;
            align-self: center;
            padding: 5px;
            font-size: 16px;
            font-family: sans-serif;
        }
        input[type='button']#new-product {
            position: absolute;
            top: 0;
            right: 0;
            background-color: black;
            color: white;
            font-size: 22px;
            font-family: sans-serif;
            border: 2px solid red;
            padding: 2px 15px;
        }
        input[type='button']#cart {
            position: absolute;
            top: 0;
            left: 0;
            background-color: black;
            color: white;
            font-size: 22px;
            font-family: sans-serif;
            border: 2px solid red;
            padding: 2px 15px;
        }
        img.trash {
            cursor: pointer;
        }
    </style>
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
            $myfile = fopen("products.txt", "r") or die("Unable to open file!");
            while(!feof($myfile)) {
                $line = fgets($myfile);
                if ($line != "") {
                    list($name, $description, $price) = explode(",", $line);
                    echo "<tr>";
                    echo "<td style='width: 10%;'>$contador</td>";
                    echo "<td>$name</td>";
                    echo "<td>$description</td>";
                    echo "<td style='width: 15%;'>$price</td>";
                    echo "<td style='width: 15%;'><a href='compra.php?prod=$name'><img src='./img/shoppingCart.png' width='30' /></a></td>";
                    echo "<td style='width: 10%;'><a href='product/delete.php?line=$contador'><img src='./img/trash_icon.png' width='30' /></a></td>";
                    echo "</tr>";
                    $contador++;
                }
            }
            fclose($myfile);
        ?>
    </table>
    <input id="cart" type="button" value="Shopping Cart" onclick="window.location.href = 'carrito.php'">
    <input id="new-product" type="button" value="Add new products" onclick="window.location.href = 'product/'">
</body>
</html>