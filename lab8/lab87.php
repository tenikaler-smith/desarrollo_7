<?php
/**
 * Created by PhpStorm.
 * User: Smith_Jimenez
 * Date: 10/05/2017
 * Time: 18:42
 */
if (array_key_exists('enviar', $_POST)){
include ('class_lib.php');
$diam = $_POST['diam'];
$altu = $_POST['altu'];
$cil = new Cilindro($diam, $altu);
$volumen = $cil->cal_volumen();
$area = $cil->cal_area();
echo"<br/> El volumen de cilindro es de: " . $volumen . " metros cubicos";
echo "<br/> El area de cilindro es de: " . $area . " metros cubicos";
}
else {
?>
<!doctype html>
<html lang="es      ||">
<head>
    <meta charset="UTF-8">
    <title>laboratorio 8.7</title>
</head>
<body>
    <form name="FormularioDatos" action="lab87.php" method="post">
        <p>CALCULO DE VOLUMEN Y AREA DE UN CILINDRO</p>
        <br><br>
        Introduzca el diametro en metros:
        <input type="text" name="diam" value="">
        <br><br>
        Introduzca la altura en metros:                         .
        <input type="text" name="altu" value="">
        <br><br>
        <input type="submit" name="enviar" value="Calcular">
    </form>
</body>
</html>
<?php
}
?>