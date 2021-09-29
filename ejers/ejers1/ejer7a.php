<!DOCTYPE html>
<html>
<head>
</head>
<body>
<?php

    class Ejer7{
    protected $min;
    protected $max;
        function parimpar($min, $max){
            $total = rand($min,$max);
            echo "$total<br>";

            if($total % 2 == 0){
                $total = $total / 2;
            }
            else{
                $total = $total * 3 + 1;
            }
            echo $total;
        }
    }
    $ej7 = new Ejer7();
    $ej7-> parimpar(2,6);

 ?>

</body>
</html>