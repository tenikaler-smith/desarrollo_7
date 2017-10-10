<?php
if(array_key_exists('ventas', $_POST)){
    include("class_lib.php");
    $ventas = $_POST['ventas'];

    $img = new Imagen($ventas);

    $verde = $img->mostrarLuzVerde();
    $amarrillo = $img->mostrarLuzAmarillo();
    $rojo = $img->mostrarLuzRojo();

    if ($verde) {
        echo "<center><img src='img/circulo_verde.png' border='0' width='250' height='250'></center>";
    }
    if ($amarrillo) {
        echo "<center><img src='img/circulo_amarillo.png' border='0' width='250' height='250'></center>";
    }
    if($rojo){
        echo "<center><img src='img/circulo_rojo.png' border='0' width='250' height='250'></center>";
    }
 }
    else{
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Laboratorio 9.1</title>
    <style>
        .titulo{

            font-family: Arial Black; font-size: 30%; color: darkblue;
        }
    </style>
</head>
<body>
<form name="FormularioDatos" action="lab91.php" method="post">
    <p class="titulo">Imagenes interactivas (Indicador de Ventas) </p>
    <br>
    <input type="text" name="ventas" placeholder="Ventas..." min="0.1">
    <input type="submit" name="comprovar" value="Comprovar" >

</form>
</body>
</html>
<?php
}
?>