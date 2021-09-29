<!DOCTYPE html>
<html>
<head>
</head>
<body>
<?php

    class Ejer6{
    protected $potencia;
    protected $cantidad;

        function potencial($potencia, $cantidad){
            for($i = 1; $i < $cantidad; $i++){
                $resultado = pow($i, $potencia);
                if ($resultado < $cantidad){
                    echo "$i - $resultado<br>";
                }
            }
        }
    }
    $ej6 = new Ejer6();
    $ej6-> potencial(3,100);

 ?>

</body>
</html>