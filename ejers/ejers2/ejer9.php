<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<form>
<p>Introduce lado<input type="text" name="numero"></p>
</form>
    <?php
        
        class Ejercicio9{
            function comprobar(){
                try{
                    if($_GET["numero"] > 0){
                        echo "Resultado : ".($_GET["numero"])*($_GET["numero"]);
                    }
                    else{
                        throw new Exception();
                    }
                }
                catch(Exception $e){
                    echo "El numero introducido es negativo. La excepcion: ".$e."\n";
                }
        }
    }
    if(isset($_GET["numero"])){

        $ej9 = new Ejercicio9();
        $ej9-> comprobar();
    }
    ?>
</body>
</html>