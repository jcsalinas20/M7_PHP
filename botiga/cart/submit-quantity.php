<?php

require("../login/session-start.php");
if ($_POST['prod'] != '') {
    $name = $_POST['prod']; $quantity = $_POST['quantity'];

    if (isset($_SESSION['products'][$name]['quantity'])) $_SESSION['products'][$name]['quantity'] += $quantity;
    else $_SESSION['products'][$name]['quantity'] = $quantity;
}

header("location:./", true)

?>