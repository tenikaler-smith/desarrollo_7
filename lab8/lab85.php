<?php
/**
 * Created by PhpStorm.
 * User: Smith_Jimenez
 * Date: 10/05/2017
 * Time: 13:38
 */
include ("class_lib.php");

$obj = new MyCloneable();

$obj->object1 = new SubObject();
$obj->object2 = new SubObject();

$obj2 = clone $obj;

print ("<br> Original Object: ");
print_r($obj);
print ("<br>");
print ("<br> Cloned Object: ");
print_r($obj2);
?>