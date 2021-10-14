<!DOCTYPE html>
<html>
<head>
</head>
<body>
  <h1>Ejercicio5</h1>

<?php
    class Ejer5{

    function generar(){
        $meses = ["Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre"];
        $dias = [31,28,31,30,31,30,31,31,30,31,30,31];
        echo "<table border = 2>";
        echo "<tr>";
        echo "<td>Indice</td>";

            for($i = 0; $i < count($meses); $i++){
                echo"<td>$meses[$i]</td>";
            }
                echo "</tr>";
                echo "<tr>";
                echo "<td>Valor</td>";

            for($i = 0; $i < count($dias); $i++){
                echo"<td>$dias[$i]</td>";
            }
                echo "<tr>";
                echo"</table>";
    }
  }
  $ej5 = new Ejer5();
  $ej5->generar();
 ?>

</body>
</html>