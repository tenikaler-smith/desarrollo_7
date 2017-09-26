<?php
/**
 * Created by PhpStorm.
 * User: Smith_Jimenez
 * Date: 09/13/2017
 * Time: 20:37
 */

    $diametro = $_POST['diam'];
    $altura = $_POST['altu'];
    $radio = $diametro/2;
    $Pi = 3.141593;
    $volumen = $Pi*$radio*$altura;
    echo"<br/> El volumen del cilindro es de " .$volumen. " metros cubicos";
    ?>