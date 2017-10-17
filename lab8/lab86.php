<?php
/**
 * Created by PhpStorm.
 * User: Smith_Jimenez
 * Date: 10/05/2017
 * Time: 17:47
 */

include ('class_lib.php');
$diam = $_POST['diam'];
$altu = $_POST['altu'];

$cil = new Cilindro($diam, $altu);
$volumen = $cil->cal_volumen();
$area= $cil->cal_area();

echo "<br> El volumen del cilindro es de: " . $volumen . " mertos cubicos";
echo "<br> el area del cilindro es de: " . $area . " metros cubicos";

?>
