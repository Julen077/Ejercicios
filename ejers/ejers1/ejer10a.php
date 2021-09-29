<!DOCTYPE html>
<html>
<head>
</head>
<body>
<?php
    class Ejer10{
    protected $total_compra;
    protected $tipo_compra;
        function gastosCompra($total_compra, $tipo_compra){
            if($total_compra <= 19){
                if($tipo_compra == "mascotas"){
                    echo"No se puede realizar el envío<br>";
                    $total = $total_compra * 0.1;
                    $total +=$total_compra;
                    echo"Precio final : $total";
                }
                else{
                    echo"Los gastos de envío son 9 euros<br>";
                    $total = $total_compra * 0.21;
                    $total +=$total_compra;
                    echo"Precio final : $total";
                }
        
            }
            else if($total_compra > 19 && $total_compra <= 40){
                echo"Los gastos de envío son 9 euros<br>";
                if($tipo_compra == "mascotas"){
                    $total = $total_compra * 0.1;
                    $total +=$total_compra;
                    echo"Precio final : $total";
                }
                else{
                    $total = $total_compra * 0.21;
                    $total +=$total_compra;
                    echo"Precio final : $total";
                }
        
            }
            else if($total_compra > 40 && $total_compra <= 80){
                echo"Los gastos de envío son 9 euros<br>";
                if($tipo_compra == "mascotas"){
                    $total = $total_compra * 0.1;
                    $total +=$total_compra;
                    echo"Precio final : $total";
                }
                else{
                    $total = $total_compra * 0.21;
                    $total +=$total_compra;
                    echo"Precio final : $total";
                }
            }
            else if($total_compra > 80){
                echo"No hay gastos de envio<br>";
                if($tipo_compra == "mascotas"){
                    $total = $total_compra * 0.1;
                    $total +=$total_compra;
                    echo"Precio final : $total";
                }
                else{
                    $total = $total_compra * 0.21;
                    $total +=$total_compra;
                    echo"Precio final : $total";
                }
            }

        }
    }
    $ej10 = new Ejer10();
    $ej10-> gastosCompra(39, "ropa");
    
 ?>
</body>
</html>