<?php

if (isset($_GET['prod'])) {
    require("../login/session-start.php");

    $name = $_GET['prod'];
    unset($_SESSION['products'][$name]);
}

header("location: ../", true);

?>