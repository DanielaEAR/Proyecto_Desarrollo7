<?php
require_once('modelo.php');

class TipoActividad extends modeloCredencialesBD{

    private $id_tipoAct;
    private $nombreAct;

    public function __construct(){
   
        parent::__construct();
       
    }
    public function consultar_tiposAct(){
        $instruccion = "CALL listarTiposAct()";
        $consulta = $this->_db->query($instruccion);
        $resultado = $consulta->fetch_all(MYSQLI_ASSOC);

        if(!$resultado){
            echo "Fallo al consultar los tipos de actividades";
        }else{
            return $resultado;
            $resultado->close();
            $this->_db->close();
        }
    }

}

?>