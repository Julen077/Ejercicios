<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>

    <?php
        
        class Ejercicio8{
            function comprobar(){
                try{
                    if(file_exists("config.php")){
                        echo "El archivo si existe";
                    }
                    else{
                        throw new Exception();
                    }
                }
                catch(Exception $e){
                    echo 'El archivo no existe '.$e."\n";
                }
        }
    }
        $ej8 = new Ejercicio8();
        $ej8-> comprobar();

    ?>
</body>
</html>