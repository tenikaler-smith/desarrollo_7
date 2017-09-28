<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Laboratorio 4.0</title>
</head>
<body>
<?php

 IF(array_key_exists('enviar', $_POST)) {
     if ($_REQUEST['ventas'] != "") {
         $ventas = $_POST['ventas'];
        
         if ($ventas >= 80) {
             echo "<center><img src='img/circulo_verde.png' border='0' width='250' height='250'></center>";

         }
         if ($ventas >= 50 && $ventas <= 79) {
                 echo "<center><img src='img/circulo_amarillo.png' border='0' width='250' height='250'></center>";
             }
             if($ventas <= 49){
             echo "<center><img src='img/circulo_rojo.png' border='0' width='250' height='250'></center>";
         }
     } else{
         $ventas = "";

         if ($_REQUEST['ventas'] == ''){
             $ventas = "Favor ingrese una cantidad";
         }
     dibuja_formulario($ventas);
 }
}
else{
    dibuja_formulario();
}
function dibuja_formulario($ventas=""){
    echo "<center>";
    echo "Indicador de las Ventas <br><br>";
    echo "<form action='lab40.php' method='POST' >";
    echo "<input type='Text' name='ventas' placeholder='Ventas' min='0.1'> $ventas <br><br>";
    echo "<input type='submit' name='enviar' value='Comprovar'>
            </from>";
    echo "</center>";

}
?>

</body>
</html>