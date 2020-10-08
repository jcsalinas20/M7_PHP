<!DOCTYPE html>
<html lang="en">
<head>
    <?php include("../variables.php") ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $NAME ?></title>
    <style>
        .disable {
            opacity: 0.3;
        }
        h1 {
            text-align: center;
        }
        table {
            display: flex;
            flex-flow: column;
            width: 100%;    
            box-shadow: 0 0 10px black;
        }
        tr {
            display: flex;
            flex-flow: row;
        }
        td.value {
            height: 80px;
            width: 100%;
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
            $month = date("m"); $year = date("Y"); // mes y año actual
            $numSemana = strftime("%w", mktime(0,0,0,$month, 1, $year));

            $diasSiguienteMes = 1; // contador para mostrar los dias del siguinete mes
            $diasAnteriorMes = cal_days_in_month(CAL_GREGORIAN, $month - 1, $year) - ($numSemana - 1); // Número de dias del mes

            $namesDays = ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"]; // Nombres de los dias

            echo "<tr>";
            for ($i=0; $i < sizeof($namesDays); $i++) echo "<td class='days'>$namesDays[$i]</td>"; // Mostrar en la tabla los nombres de los dias
            echo "</tr>";

            $numDias = cal_days_in_month(CAL_GREGORIAN, $month, $year); // Número de dias del mes
            $contador = 1; // contador para saber el número de dia que introducir
            $semanas = ceil(($numDias + $numSemana) / 7); // sacar el número de semanas que tiene el mes
            for ($i = 1; $i <= $semanas; $i++) {
                echo "<tr>";

                // NÚMERO DE DÍA
                echo "<tr class='day'>";
                if ($i == 1) {
                    for ($j = 0; $j < $numSemana; $j++) {
                        echo "<th class='num disable'>$diasAnteriorMes</th>"; // ocultar los dias del mes pasado
                        $diasAnteriorMes++;
                    }
                    for ($j = $numSemana; $j < 7; $j++) { // mostrar los dias del resto de la semana
                        echo "<th class='num'>$contador</th>";
                        $contador++;
                    }
                } else {
                    for ($j = 0; $j < 7; $j++) { // mostrar los dias de la semana
                        if ($contador > $numDias) { 
                            echo "<th class='num disable'>$diasSiguienteMes</th>";
                            $diasSiguienteMes++;
                        }
                        else echo "<th class='num'>$contador</th>";
                        $contador++;
                    }
                }
                echo "</tr>";

                // INPUT TEXT BOX
                echo "<tr>";
                if ($i == 1) {
                    for ($j = 0; $j < $numSemana; $j++) // ocultar los dias del mes pasado
                        echo "<td class='value disable'><input disabled type='text' /></td>";
                    for ($j = $numSemana; $j < 7; $j++) // mostrar los dias del resto de la semana
                        echo "<td class='value'><input type='text' placeholder='Enter text...' /></td>";
                } else {
                    $contador = $contador - 7; // restar 7 al contador para agregar el input al día
                    for ($j = 0; $j < 7; $j++) { // mostrar los dias de la semana
                        if ($contador > $numDias) echo "<td class='value disable'><input disabled type='text' /></td>"; // dias del siguiente mes
                        else echo "<td class='value'><input type='text' placeholder='Enter text...' /></td>";
                        $contador++;
                    }
                }
                echo "</tr>";

                echo "</tr>";
            }
        ?>
    </table>
</body>
</html>