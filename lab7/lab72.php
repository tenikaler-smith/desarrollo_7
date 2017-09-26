<?php
/**
 * Created by PhpStorm.
 * User: Smith_Jimenez
 * Date: 09/25/2017
 * Time: 19:31
 */
    include ("class_lib.php");

    //instanciamos un par objetos cliente
    $cliente1 = new cliente("Pepe", 1);
    $cliente2 = new cliente("Roberto", 564);

    //mostramos el  numero de cada cliente creado
    echo "<br> El identificador del cliente 1 es: " . $cliente1->dame_numero();
    echo "<br> El identificador del cliente 2 es: " . $cliente2->dame_numero();



?>