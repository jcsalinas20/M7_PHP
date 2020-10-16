<?php

if ($_POST['prod'] != '') {
    $data =  $_POST['prod'] . "," .$_POST['quantity'];
    $myfile = file_put_contents('cart.txt', $data.PHP_EOL , FILE_APPEND | LOCK_EX);
}

header("location:./carrito.php", true)

?>