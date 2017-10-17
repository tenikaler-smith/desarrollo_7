<?php
/**
 * Created by PhpStorm.
 * User: Smith_Jimenez
 * Date: 09/30/2017
 * Time: 04:50
 */

include ("class_lib.php");

print Foo::$mi_static . " value (1)<br>";

$foo = new Foo();
print $foo->staticValor() . " value (2)<br>";

print $foo->mi_static . " value (3)<br>";
//"Propiedad" no definida mi_static
// $foo::mi_static no es posible

print Bar::$mi_static . " value (4)<br>";

$bar = new Bar();
print $bar->fooStatic() . " value (5)<br>";
?>