<?php
/**
 * Created by PhpStorm.
 * User: Smith_Jimenez
 * Date: 10/05/2017
 * Time: 13:08
 */

spl_autoload_register(function ($nombre_clase){
   $archivo = "clases/" . $nombre_clase . ".php";
   if (file_exists($archivo))include_once ($archivo);
});
$obj = new MiClase();
$obj2 = new MiOtraClase();
?>