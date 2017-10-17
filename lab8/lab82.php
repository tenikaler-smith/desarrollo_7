<?php
/**
 * Created by PhpStorm.
 * User: Smith_Jimenez
 * Date: 10/05/2017
 * Time: 11:43
 */


include 'class_lib.php';
$class1 = new ClaseConcreta1;
$class1->printOut();
echo $class1->prefixValor('FOO_') . "<br>";

$class2 = new ClaseConcreta2;
$class2->printOut();
echo $class2->prefixValor('FOO_') . "<br>";
?>