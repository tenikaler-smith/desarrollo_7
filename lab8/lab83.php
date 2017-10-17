<?php
/**
 * Created by PhpStorm.
 * User: Smith_Jimenez
 * Date: 10/05/2017
 * Time: 12:57
 */

include ("class_lib.php");
$temp1 = new Template;
$prueba = "Valor de Prueba";

$temp1->ponerVariable("var1", "Valor 1");
$temp1->ponerVariable("var2", "Valor 2");
$temp1->ponerVariable("var3", "Valor 3");

echo $temp1->verHtml($prueba);

?>