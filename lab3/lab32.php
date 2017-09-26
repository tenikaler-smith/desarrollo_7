<?php
/**
 * Created by PhpStorm.
 * User: Smith_Jimenez
 * Date: 09/17/2017
 * Time: 15:38
 */
    $precio1 = $_POST['precio1'];
    $precio2 = $_POST['precio2'];
    $precio3 = $_POST['precio3'];
    $media = ($precio1+$precio2+$precio3)/3;
    echo "<br>    DATOS RECIBIDOS";
    echo "<br>    Precio Producto establecimiento 1: ".$precio1. " dolares";
    echo "<br>    Precio Producto establecimiento 2: ".$precio2. " dolares";
    echo "<br>    Precio Producto establecimiento 3: ".$precio3. " dolares";
    echo "<br>    El Precio medio del producto es de: ".$media. "  dolares";