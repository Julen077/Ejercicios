<!DOCTYPE html>
<html>
<head>
</head>
<body>
<?php

    class Ejer3{
        protected $edad;
        function edadesCalculo($edad){
            
            if ($edad >= 0 && $edad <= 10){
                echo "Se encuentra entre 0 y 10 años";
            }
            else if($edad >=11 && $edad <= 18){
                echo "Se encuentra entre 11 y 18 años";
            }
            else if($edad >=19 && $edad <= 29){
                echo "Se encuentra entre 19 y 29 años";
            }
            else if($edad >=30 && $edad <= 40){
                echo "Se encuentra entre 30 y 40 años";
            }
            else if($edad >=41 && $edad <= 81){
                echo "Se encuentra entre 41 y 81 años";
            }
            else if($edad >=82 && $edad <= 100){
                echo "Se encuentra entre 82 y 100 años";
            }
          }
    }
    $ej3 = new Ejer3();
    $ej3->edadesCalculo(81);

 ?>

</body>
</html>