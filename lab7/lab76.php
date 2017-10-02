<?php
/**
 * Created by PhpStorm.
 * User: Smith_Jimenez
 * Date: 09/30/2017
 * Time: 04:59
 */
final class ClaseBase{
    public function test(){
        echo "ClaseBase::test() LLamada\n";
    }
    // A    qui dA IGUAL si se declara el metodo como final o no
    final public function moreTesting(){
        echo "ClaseBase::moreTesting() llamada\n";
    }
}
class ClaseHijo extends ClaseBase {

}
?>