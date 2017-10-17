<?php
/**
 * Created by PhpStorm.
 * User: Smith_Jimenez
 * Date: 10/15/2017
 * Time: 04:34
 */
require_once('modelo.php');
class noticia extends modeloCredencialesBD {
    protected $titulo;
    protected $texto;
    protected $categoria;
    protected $fecha;
    protected $imagen;

    public function __construct(){
        parent::__construct();
    }

    public function consultar_noticias(){
        $instruccion = "CALL sp_listar_noticias()";

        $consulta = $this->_db->query($instruccion);
        $resultado = $consulta->fetch_all(MYSQLI_ASSOC);

        if(!$resultado){
            echo "Fallo al consultar las noticias";
        }
        else{return $resultado;
            $resultado->close();
            $this->_db->close();
        }
    }
    public function consultar_noticias_filtro($campo,$valor){
        $instruccion =  "CALL sp_listar_noticias_filtro('".$campo."','".$valor."')";

        $consulta = $this->_db->query($instruccion);
        $resultado = $consulta->fetch_all(MYSQLI_ASSOC);

        IF ($resultado){
            return $resultado;
            $resultado->close();
            $this->_db->close();
        }
    }
}









