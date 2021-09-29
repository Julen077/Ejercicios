<!DOCTYPE html>
<html>
<head>
</head>
<body>
<?php
    class Ejer8{
    protected $base;

        function asteriscos($base){
            $asteriscos = "*";
            $numBlancos = $base;

            for($i = 0; $i < $base/2; $i++){
                for($j = 0; $j < $numBlancos/2; $j++){
                    echo("&nbsp;&nbsp");
                }
                echo "$asteriscos <br>";
                $asteriscos.="**";
                $numBlancos = $numBlancos -2;
              }
         }
    }
    $ej8 = new Ejer8();
    $ej8-> asteriscos(9);
 ?>

</body>
</html>