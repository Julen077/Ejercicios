<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>

    <form>
        <p>Enero <input type="text" name="mes1"></p>
        <p>Febrero <input type="text" name="mes2"></p>
        <p>Marzo <input type="text" name="mes3"></p>
        <p>Abril <input type="text" name="mes4"></p>
        <p>Mayo <input type="text" name="mes5"></p>
        <p>Junio <input type="text" name="mes6"></p>
        <p>Julio <input type="text" name="mes7"></p>
        <p>Agosto <input type="text" name="mes8"></p>
        <p>Septiembre <input type="text" name="mes9"></p>
        <p>Octubre <input type="text" name="mes10"></p>
        <p>Noviembre <input type="text" name="mes11"></p>
        <p>Diciembre <input type="text" name="mes12"></p>
        <input type="submit" value="Enviar">
    </form>

    <?php
        
        class Ejercicio6{
           
            function añadir(){
                echo "<span style='color:blue'>"."Enero".": "."</span>".($_GET["mes1"])."<br>";
                echo "<span style='color:blue'>"."Febrero".": "."</span>".($_GET["mes2"])."<br>";
                echo "<span style='color:blue'>"."Marzo".": "."</span>".($_GET["mes3"])."<br>";
                echo "<span style='color:blue'>"."Abril".": "."</span>".($_GET["mes4"])."<br>";
                echo "<span style='color:blue'>"."Mayo".": "."</span>".($_GET["mes5"])."<br>";
                echo "<span style='color:blue'>"."Junio".": "."</span>".($_GET["mes6"])."<br>";
                echo "<span style='color:blue'>"."Julio".": "."</span>".($_GET["mes7"])."<br>";
                echo "<span style='color:blue'>"."Agosto".": "."</span>".($_GET["mes8"])."<br>";
                echo "<span style='color:blue'>"."Septiembre".": "."</span>".($_GET["mes9"])."<br>";
                echo "<span style='color:blue'>"."Octubre".": "."</span>".($_GET["mes10"])."<br>";
                echo "<span style='color:blue'>"."Noviembre".": "."</span>".($_GET["mes11"])."<br>";
                echo "<span style='color:blue'>"."Diciembre".": "."</span>".($_GET["mes12"])."<br>";
            }
        }

        if(isset($_GET["mes1"]) && isset($_GET["mes2"]) && isset($_GET["mes3"]) && isset($_GET["mes4"]) && isset($_GET["mes5"]) && isset($_GET["mes6"]) && isset($_GET["mes7"]) && isset($_GET["mes8"]) && isset($_GET["mes9"]) && isset($_GET["mes10"]) && isset($_GET["mes11"]) && isset($_GET["mes12"])){
            $ej6 = new Ejercicio6();
            $ej6->añadir();
        }
       
    ?>
</body>
</html>