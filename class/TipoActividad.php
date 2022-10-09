<?php
require_once('modelo.php');

class TipoActividad extends modeloCredencialesBD{

    private $id_tipoAct;
    private $nombreAct;

    public function __construct(){
   
        parent::__construct();
       
    }
    public function consultar_tiposAct(){
        
    }

}

?>