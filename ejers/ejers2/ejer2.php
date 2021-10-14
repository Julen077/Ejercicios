<!DOCTYPE html>
<html>
<head>
</head>
<body>
<?php
    
    class Ejer2{
        private $filas;
        private $columnas;

        function html($filas, $columnas){
            echo "<table border = 20>";

            for($i = 0; $i < $filas; $i++){
                echo"<tr>";

                for($j = 0; $j < $columnas; $j++){
                    echo "<td>a</td>";
                }
                echo"</tr>";
            }
            echo"</table>";
        }
    }
    $ej2 = new Ejer2();
    $ej2-> html(5,10);
    
 ?>

</body>
</html>