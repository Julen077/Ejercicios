<!DOCTYPE html>
<html>
<head>
</head>
<body>
<?php
    class Ejer1{

        private $array1 = [];
        private $array2 = [];
        

        function arrays(){

            for($i = 0; $i < 10; $i++){
                $array1[$i] = $i;
                
            }
                for ($j = 1; $j < count($array1); $j++){ 
                    $factorial = 1; 
                    for ($t = 1; $t <= $array1[$j]; $t++){ 
                    $factorial *= $t;
                }
                    $array2[$j] = $factorial;
                }
                for($i = 1; $i <= count($array2); $i++){
                    echo "$array2[$i] <br>";
                }
            } 
        }
    $ej1 = new Ejer1();
    $ej1-> arrays();
    
 ?>

</body>
</html>
