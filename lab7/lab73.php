<?php
/**
 * Created by PhpStorm.
 * User: Smith_Jimenez
 * Date: 09/26/2017
 * Time: 13:02
 */
include("class_lib.php");
// Ejemplo de uso de Clase Padre
    $soporte1 = new Soporte("The Soccer Game", 22,3);
    echo "<br>" . $soporte1->titulo . "</b>";
    echo "<br>Precio: " . $soporte1->dame_precio_sin_itbm() . " dolares";
    echo "<br>Precio ITBM incluido: " . $soporte1->dame_precio_con_itbm() . " dolares";

    //Ejemplo de uso de la Clase hija 1
    $mivideo = new Video("Los Otros", 22, 4.5,"115 minutos");
    echo "<br><br>";
    echo "<b>" . $mivideo->titulo . "</b>";
    echo"<br>Precio: " . $mivideo->dame_precio_sin_itbm() . " dolares";
    echo "<br>Precio ITBM incluido: " . $mivideo->dame_precio_con_itbm() . " dolares ";
    echo "<br>" . $mivideo->imprime_caracteristicas();

    //Ejemplo de uso de Clase HIJA 2

?>