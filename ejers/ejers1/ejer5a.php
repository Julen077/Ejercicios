<!DOCTYPE html>
<html>
<head>
</head>
<body>
<?php

    class Ejer5{
    protected $edad;
    protected $altura;

        function calculo($edad, $altura){
            if($edad < 10 || $altura < 120){
        
                if($edad < 6){
                    echo("No pueden entrar"); 
                }
                else{
                    echo("Tienen que ir acompañados");
                }
            }
            else{
                echo("Pueden entrar");
            }
        }
    }
    $ej5 = new Ejer5();
    $ej5-> calculo(6,120);
 

 ?>

</body>
</html>