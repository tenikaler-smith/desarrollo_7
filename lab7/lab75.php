<?php
/**
 * Created by PhpStorm.
 * User: Smith_Jimenez
 * Date: 09/30/2017
 * Time: 04:59
 */

Class ClaseBase{
    public function test(){
        echo "ClaseBase::test() llamada\n";

    }
    final public function masTests(){
        echo "ClaseBase::masTests() llamada\n";
    }
}
Class ClaseHijo extends ClaseBase{
    public function masTests(){
        echo "ClaseHijo::masTests() llamada\n";
    }
}
?>