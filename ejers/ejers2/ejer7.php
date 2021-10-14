<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>

    <form>
        <p>Base <input type="text" name="base"></p>
        <p>Exponente <input type="text" name="exponente"></p>
        <input type="submit" value="Enviar">
    </form>

    <?php
        
        class Ejercicio7{
           
            function calculo(){
                if($_GET["exponente"] == null){
                    echo "El resultado de ".($_GET["base"])." elevado a 2 por defecto es : ".pow($_GET["base"],2);
                    
                }
                else{
                    echo "El resultado de ".($_GET["base"])." elevado a ".($_GET["exponente"])." es : ".pow($_GET["base"],$_GET["exponente"]);
                }
            }
        }
            $ej7 = new Ejercicio7();
            $ej7->calculo();

    ?>
</body>
</html>