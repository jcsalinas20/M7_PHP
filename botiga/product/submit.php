<?php

if ($_POST['name'] != '') {
    require("../login/session-start.php");

    /*** AGREGAR PRODUCTO EN EL .txt */
    $data =  $_POST['name'] . "," .$_POST['description'] . "," . $_POST['price'];
    $myfile = file_put_contents('../txt/products.txt', $data.PHP_EOL , FILE_APPEND | LOCK_EX);

    /*** PRODUCTO AGREGADO A LA SESSION ***/
    $name = $_POST['name'];
    $description = $_POST['description'];
    $price = $_POST['price'];

    isset($_SESSION['products']) ? '' : $_SESSION['products'] = [];

    if (isset($_SESSION['products'][$name])) {
        $_SESSION['products'][$name]['description'] = $description;
        $_SESSION['products'][$name]['price'] = $price;
    } else {
        $_SESSION['products'] += [
            $name => [
                "name" => $name,
                "description" => $description,
                "price" => $price,
                "quantity" => 0
            ]
        ];
    }
}

header("location:../", true)

?>