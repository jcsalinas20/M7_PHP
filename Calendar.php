<!DOCTYPE html>
<html lang="en">
<head>
    <?php include("../variables.php") ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $NAME ?></title>
    <style>
        h1 {
            text-align: center;
        }
        table {
            display: flex;
            flex-flow: column;
            width: 100%;
        }
        tr {
            display: flex;
            flex-flow: row;
        }
        td.value {
            height: 80px;
            display: flex;
            padding: 0;
        }
        td, th {
            width: 14%;
            padding: 2px 2px;
            border: 1px solid black;
            text-align: center;
        }
        td.days {
            background-color: #212121;
            font-size: 15px;
            color: white;
        }
        th.num {
            padding: 2px 2px;
            background-color: #dadada;
        }
        td input {
            width: 100%;
        }
    </style>
</head>
<body>
    <h1><?php echo date("F") . " - " . date("Y")  ?></h1>
    <table>
        <?php
        
            $first_day = strftime("%w", mktime(0, 0, 0, 1, 1, $year));

            $numDay = 3;
            $namesDays = ["D", "L", "M", "X", "J", "V", "S"];

            echo "<tr>";
            for ($i=0; $i < sizeof($namesDays); $i++) echo "<td class='days'>$namesDays[$i]</td>";
            echo "</tr>";

            $numDias = cal_days_in_month(CAL_GREGORIAN, date("m"), date("Y"));
            $contador = 1;
            $semanas = ceil(($numDias + $numDay) / 7);
            for ($i = 1; $i <= $semanas; $i++) {
                echo "<tr>";

                echo "<tr class='day'>";
                if ($i == 1) {
                    for ($j = 0; $j < $numDay; $j++) echo "<th class='num'>0</th>";
                    for ($j = $numDay; $j < 7; $j++) {
                        if ($contador > $numDias) echo "<th class='num'>0</th>";
                        else echo "<th class='num'>$contador</th>";
                        $contador++;
                    }
                } else {
                    for ($j = 0; $j < 7; $j++) {
                        if ($contador > $numDias) echo "<th class='num'>0</th>";
                        else echo "<th class='num'>$contador</th>";
                        $contador++;
                    }
                }
                echo "</tr>";

                echo "<tr>";
                for ($j = 0; $j < 7; $j++)
                    echo "<td class='value'><input type='text' placeholder='Enter text...' /></td>";
                echo "</tr>";

                echo "</tr>";
            }
        ?>
    </table>
</body>
</html>