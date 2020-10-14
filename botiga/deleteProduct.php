<?php

if (isset($_GET['line'])) {
    $line = $_GET['line'] - 1;

    $file_out = file("products.txt");
    unset($file_out[$line]);
    file_put_contents("products.txt", $file_out);
}

header("location: ./", true);

?>