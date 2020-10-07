<!DOCTYPE html>
<html lang="en">
<head>
    <?php include("../variables.php") ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $NAME ?></title>
    <style>
        td {
            padding: 2px 20px;
            border: 1px solid black;
            text-align: center;
            width: 50%;
        }
        h1 {
            text-align: center;
        }
    </style>
</head>
<body>
    <h1>Variable $_SERVER</h1>
    <table>
        <?php
            foreach ($_SERVER as $key => $value) {
                echo "<tr>";
                echo "<td>$key</td>";
                echo "<td>$value</td>";
                echo "</tr>";
            }
        ?>
    </table>
</body>
</html>