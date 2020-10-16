<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopping Cart</title>
    <?php $myFile = fopen("cart.txt", "r") or die("Unable to open file!"); ?>
    <style>
        body {
            display: flex;
            flex-flow: row wrap;
            width: 100%;
            margin: 0;
        }
        div.product-card {    
            box-shadow: 0 0 5px black;
            padding: 10px;
            width: 47%;
            margin: 10px auto;
            display: flex;
        }
        p.name {
            width: 50%;
            text-align: center;
        }
        p.quantity {
            width: 50%;
            text-align: center;
        }
    </style>
</head>
<body>
    <?php
        while(!feof($myFile)) {
            $line = fgets($myFile);
            if ($line != "") {
                list($name, $quantity) = explode(",", $line);
                echo (
                    "<div class='product-card'>
                        <p class='name'>Product: <b>$name</b></p>
                        <p class='quantity'>Quantity: <b>$quantity</b></p>
                    </div>"
                );
            }
        }
    ?>
</body>
</html>