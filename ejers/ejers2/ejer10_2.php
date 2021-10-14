<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <?php
    require("ejer10.php");
        class User extends Persona{
            private $punto;
        
            public function setPunto($punto){
                $this->punto = $punto;
            }
            public function getPunto(){
                return $this->punto;
            }
            public function puntos(){
                if ($this->punto >= 100) {
                    echo "Tienes mas de 100 puntos: " . $this->punto;
                } else {
                    echo "Tienes menos de 100 puntos: " . $this->punto;
                }
            }
            public function __toString(){
                return "User: " . parent::getNombre(). " " . parent::getApellido() . " con dni: " . parent::getDni()." tiene ".$this->punto." puntos";
            }
    }
    $user = new User("73232496J","Julen","Goñi");
    $user->setPunto(200);
    echo $user->__toString();
    ?>
</body>
</html>