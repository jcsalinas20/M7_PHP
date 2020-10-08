<?php

$data =  $_POST['name'] . "," .$_POST['description'] . "," . $_POST['price'];
$myfile = file_put_contents('products.txt', $data.PHP_EOL , FILE_APPEND | LOCK_EX);

header("location:./", true)

?>