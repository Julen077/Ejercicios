<!DOCTYPE html>
<html>
<head>
</head>
<body>
<?php
    class Ejer1{
    protected $piso;
    protected $puerta;

  function generar($piso, $puerta){
    for ($i = 0; $i < 5; $i++){
        for ($j = 0; $j < 2; $j++){
            echo"<br>El piso $piso con la puerta $puerta";
            $puerta++;
        }
        echo"<br>El piso $piso con la puerta $puerta";
        $piso++;
        $puerta = 1;
      }
    }
  }
    $ej1 = new ejer1();
    $ej1->generar(1,1);

 ?>

</body>
</html>