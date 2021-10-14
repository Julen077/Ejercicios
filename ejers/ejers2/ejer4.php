<!DOCTYPE html>
<html>
<head>
</head>
<body>
  <h1>Ejercicio1</h1>

  <form>
    <p>Palabras: <input type="text" name="texto"></p>

  </form>
<?php
    class Ejer4{
     private $str;

     public function __construct($str){
         $this->str = $str;
     }

     function prueba(){
        $this->arrayvacio = array();
        $array = explode(" ",$this->str);

        for($i = 0; $i < count($array); $i++){
            $this->arrayvacio[$array[$i]]=strlen($array[$i]);
        }
            foreach($this->arrayvacio as $i=>$j){
                echo "$i, $j<br>";
        }
     }
  }
    if(isset($_GET["texto"])){
        $ej4 = new Ejer4($_GET["texto"]);
        $ej4->prueba();

    }
 ?>

</body>
</html>