<?php
/**
 * Created by PhpStorm.
 * User: Smith_Jimenez
 * Date: 09/25/2017
 * Time: 19:24
 */
// libreria del lab8
// aqui inserto las clases para el lab8

// Uso de constante
class MiClase{
    const constate = 'valor constante';
    function mostrarConstante(){
        echo self::constate . "\n";

    }
}

// clase abstracta
abstract class ClaseAbstracta{
    //Se fuerza la herencia de la clase para definir estos métodos
    abstract protected function tomarValor();
    abstract protected function prefixValor($prefix);
    //Metodo común
    public function printOut(){
       print $this->tomarValor() . "<br>";
    }
}

//hereda la ClaseAbstracta e implementa el metodo protegido abstracto prefixValor
class ClaseConcreta1 extends ClaseAbstracta{
    protected function tomarValor(){
        return "ClaseConcreta1";
    }
    public function prefixValor($prefix)
    {
        // TODO: Implement prefixValor() method.
        return "{$prefix}ClassConcreta1";
    }
}

//create new class ClaseConcreta2
// herada metodo de la clase  Padre Abstracta ClaseAbstracta
// y tambien implementa el metodo de la clase hija ClaseConcreta2
class ClaseConcreta2 extends ClaseAbstracta{
    protected function tomarValor(){
        return "ClaseConcreta2";
    }
    public function prefixValor($prefix)
    {
        // TODO: Implement prefixValor() method.
        return "{$prefix}ClaseConcreta2";
    }
}

//tema Interface
interface itemplate{
    public function ponerVariable($nombre, $var);
    public function verHtml($templete);
}
class Template implements itemplate{
    private $vars = array();
    public function ponerVariable($nombre, $var){
        $this->vars[$nombre]=$var;
    }
        public function verHtml($template){
            foreach ($this->vars as $nombre => $value){
                $template = str_replace('{' . $nombre .'}', $value, $template);
            }
            return $template;
        }
}

// clone of Object
class SubObject{
    static $instances = 0;
    public $instance;

    public function __construct()
    {
        $this->instance = ++self::$instances;
    }
    public function __clone(){
        $this->instance = ++self::$instances;
    }
}

//create new class MyCloneable
class MyCloneable
{
    public $object1;
    public $object2;

    public function __clone()
    {
        //forzar una copia de this->object
        $this->object1 = clone $this->object1;
    }
}

// clase para lab86.php
class Cilindro{
    protected $pi;
    protected $diametro;
    protected $altura;
    protected $radio;

    function __construct($d, $a)
    {
        $this->diametro = $d ;
        $this->altura = $a;
        $this->pi = 3.141593;
        $this->radio = $d/2;
    }
    function obtener_radio(){
        return $radio;
    }
    function cal_volumen(){
        return $this->pi*$this->radio*$this->altura;
    }
    function cal_area(){
        return 2*$this->pi*$this->radio*($this->altura);
    }
}












?>