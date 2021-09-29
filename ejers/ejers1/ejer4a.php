<!DOCTYPE html>
<html>
<head>
</head>
<body>
<?php

    class Ejer4{
    protected $texto;
        function palindromo($texto){
            $texto = str_replace(' ', '', $texto);
            $textoreves = strrev($texto);
   
            if($texto == $textoreves){
                echo "Es palindromo";
            }
            else{
                echo "No es palindromo";
            }
        }
    }
    $ejer4 = new Ejer4();
    $ejer4->palindromo("a luna  esea nula");
 

 ?>

</body>
</html>