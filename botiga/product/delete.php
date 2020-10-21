<?php

if (isset($_GET['prod'])) {
    require("../login/session-start.php");

    // BORRAR EL PRODUCTO EN EL ARCHIVO .txt
    $line = $_GET['line'] - 1;
    $file_out = file("../txt/products.txt");
    unset($file_out[$line]);
    file_put_contents("../txt/products.txt", $file_out);

    // BORRAR PRODUCTO DE LA SESSION
    $name = $_GET['prod'];
    unset($_SESSION['products'][$name]);
}

header("location: ../", true);

?>