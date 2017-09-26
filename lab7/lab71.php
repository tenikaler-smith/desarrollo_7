<?php
/**
 * Created by PhpStorm.
 * User: Smith_Jimenez
 * Date: 09/25/2017
 * Time: 19:00
 */
class Cliente{
    var $nombre;
    var $numero;
    var $peliculas_alquiladas;

    function __construct($nombre, $numero){
        $this->nombre = $nombre;
        $this->numero = $numero;
        $this->peliculas_alquiladas = array();
    }
    function __destruct(){
        echo "<br>destruido: " . $this->nombre;
    }
    function  dame_numero(){
        return $this->numero;
    }
}
// instanciamos un par de objetos clientes
    $cliente1 = new cliente("Pepe", 1);
    $cliente2 = new cliente("Roberto", 564);

// mostramos el numero de cada cliente creado
    echo "<br> el identificador del cliente 1 es: " . $cliente1->dame_numero();
    echo "<br> el indentificador del clinete 2 es: " . $cliente2->dame_numero();
