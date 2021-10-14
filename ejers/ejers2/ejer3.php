<!DOCTYPE html>
<html>
<head>
</head>
<body>
<?php
    
    class Ejer3{
        

        function numeroRandom(){
            for($i = 0; $i < 20; $i++){
                $arrayrandom[$i] = rand(0,20);
            }
            return $arrayrandom;
        }

        function calculoMenorMayor($arrayrandom){
            $min = 20;
            $max = 0;
            for($i = 0; $i < count($arrayrandom); $i++){
                if($arrayrandom[$i] < $min){
                    $min = $arrayrandom[$i];
                }
                else if($arrayrandom[$i] > $max){
                    $max = $arrayrandom[$i];
                }
            }
            $arraymaxmin = [$min, $max];   
            for($t = 0; $t < count($arrayrandom); $t++){
                for($j = 1; $j < count($arraymaxmin); $j++){
                    
                    if($arrayrandom[$t] === $max){
                    echo "<font color=\"green\">$max</font><br>";
                    }
                    else if($arrayrandom[$t] === $min){
                        echo "<font color=\"blue\">$min</font><br>";
                    }
                    else{
                        echo"$arrayrandom[$t]<br>";
                    }  
                } 
            }
        }
        function calculoMedia($arrayrandom){
            $suma = 0;
            $media = 0;
            for($i = 0; $i < count($arrayrandom); $i++){
                $suma = $suma + $arrayrandom[$i];
            }
            $media = $suma / count($arrayrandom);
            echo"La suma es : $suma<br>";
            echo"La media es : $media";
        }
    }
    $ej3 = new Ejer3();
    $array = $ej3-> numeroRandom();
    $ej3-> calculoMenorMayor($array);
    $ej3-> calculoMedia($array);
 ?>

</body>
</html>