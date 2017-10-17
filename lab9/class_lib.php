<?php

// clase del lab91 imagenes interectivas
class Imagen{
    protected $ventas;

    function __construct($vent)
    {
        $this ->ventas = $vent;
    }
    function mostrarLuzVerde(){
         return $this->ventas >= 80;
    }
    function mostrarLuzAmarillo(){
        return $this->ventas >= 50 && $this->ventas <= 79;
    }
    function mostrarLuzRojo(){
        return $this->ventas <= 49;
    }
}

class fibonacci{
    fib(0)=fib(1) = 1;
    fib(n)=fib(n-1)+fib(n-2)


}
?>