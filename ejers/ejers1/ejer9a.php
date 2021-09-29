<!DOCTYPE html>
<html>
<head>
</head>
<body>
<?php
    class Ejer9{
    protected $cantidad;
        function comisiones($cantidad){
            $comision = 0;
            $total = 0;

            if($cantidad <= 10000){
                $comision = 5;
            }
            else if($cantidad > 10000 && $cantidad <= 20000){
                $comision = 8;
            }
            else if($cantidad > 20000 && $cantidad <= 40000){
                $comision = 10;
            }
            else {
                $comision = 13;
            }
            $total = $comision / 100;
            $total = $cantidad * $total;
            echo"$comision %<br>";
            echo $total;
        }
    }
    $ej9 = new Ejer9();
    $ej9-> comisiones(25000);
    
    
 ?>

</body>
</html>