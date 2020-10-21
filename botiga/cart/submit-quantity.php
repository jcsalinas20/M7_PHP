<?php

require("../login/session-start.php");
if ($_POST['prod'] != '') {
    $name = $_POST['prod'];
    $quantity = $_POST['quantity'];

    /*
     * SI CUANDO EL USER AGREGA CANTIDAD A UN PRODUCTO Y NO EXISTE EL ARRAY PRODUCTS DE LA SESSION,
     * SE GENERA DE NUEVO EL ARRAY CON LOS PRODUCTOS DEL .txt
     */
    if (!isset($_SESSION['products'])) {
        $_SESSION['products'] = [];
        $myfile = fopen("../txt/products.txt", "r") or die("Unable to open file!");
        while (!feof($myfile)) {
            $line = fgets($myfile);
            if ($line != "") {
                list($prod, $desc, $price) = explode(",", $line);
                $_SESSION['products'] += [
                    $prod => [
                        "name" => $prod,
                        "description" => $desc,
                        "price" => $price,
                        "quantity" => 0
                    ]
                ];
            }
        }
    }

    // AGREGAR CANTIDAD AL PRODUCTO
    if (isset($_SESSION['products'][$name]['quantity'])) $_SESSION['products'][$name]['quantity'] += $quantity;
    else $_SESSION['products'][$name]['quantity'] = $quantity;
}

header("location:./", true);

?>