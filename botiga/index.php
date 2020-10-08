<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Botiga</title>
    <style>
        body {
            background-color: #d1d1d1;
        }
        h1 {
            font-family: sans-serif;
            text-align: center;
            text-shadow: 0 0 3px red;
        }
        table {
            display: flex;
            width: 100%;
            box-shadow: 0 0 8px black;
        }
        tbody {
            width: 100%;
        }
        td, th {
            border: 1px solid red;
        }
        tr {
            width: 100%;
            display: flex;
        }
        th {
            background-color: #212121;
            color: white;
            font-family: sans-serif;
            font-size: 25px;
            width: 33.3%;
        }
        td {
            width: 33.3%;
            background-color: #6f6f6f;
            color: white;
            text-align: center;
            padding: 5px;
            font-size: 16px;
            font-family: sans-serif;
        }
        input[type='button'] {
            position: absolute;
            top: 0;
            right: 0;
            background-color: black;
            color: white;
            font-size: 22px;
            font-family: sans-serif;
            border: 2px solid red;
            padding: 2px 15px;
        }
    </style>
</head>
<body>
    <h1>List of Products</h1>
    <table>
        <tr>
            <th>Name</th>
            <th>Description</th>
            <th>Price</th>
        </tr>
        <?php
            $myfile = fopen("products.txt", "r") or die("Unable to open file!");
            while(!feof($myfile)) {
                $line = fgets($myfile);
                if ($line != "") {
                    list($name, $description, $price) = explode(",", $line);
                    echo "<tr>";
                    echo "<td>$name</td>";
                    echo "<td>$description</td>";
                    echo "<td>$price</td>";
                    echo "</tr>";
                }
            }
            fclose($myfile);
        ?>
    </table>
    <input type="button" value="Add new products" onclick="window.location.href = 'addProducts.php'">
</body>
</html>