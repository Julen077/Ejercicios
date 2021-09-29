<!DOCTYPE html>
<html>
<head>
</head>
<body>
<?php
    class Ejer2{
    protected $num1;
    protected $num2;
    protected $num3;
        function numeros($num1, $num2, $num3){
            if($num1 > $num2 && $num1 > $num3){
                echo "El numero mas grande es : $num1";
            }
            else if($num2 > $num1 && $num2 > $num3){
                echo "El numero mas grande es : $num2";;
            }
            else {
                echo "El numero mas grande es : $num3";
            }
        }
    }
    $ej2 = new Ejer2();
    $ej2->numeros(2,8,4);
  

 ?>

</body>
</html>