<?php

if ($_POST['name'] != '') {
    require("../login/session-start.php");
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
                "price" => $price
            ]
        ];
    }
}

header("location:../", true)

?>