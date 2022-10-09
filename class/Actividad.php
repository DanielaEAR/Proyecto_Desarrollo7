<?php
require_once('modelo.php');

class Actividad extends modeloCredencialesBD{

    private $id_actividad;
    private $fecha;
    private $hora;
    private $ubicacion;
    private $email;
    private $repetir;
    private $tipoAct;

    public function __construct(){
   
        parent::__construct();
       
    }
    public function  mostrar_actividades(){
        $instruccion = "CALL mostrarActividades()";
        $consulta = $this->_db->query($instruccion);
        $resultado = $consulta->fetch_all(MYSQLI_ASSOC);

        if(!$resultado){
            echo "Fallo al consultar las actividades";
        }else{
            return $resultado;
            $resultado->close();
            $this->_db->close();
        }
    }
    public function filtrar_actividades($campo, $valor){
        $instruccion = "CALL filtrarActividades('".$campo."','".$valor."')";
        $consulta = $this->_db->query($instruccion);
        $resultado = $consulta->fetch_all(MYSQLI_ASSOC);

        if(!$resultado){
            echo "Fallo al consultar las actividades";
        }else{
            return $resultado;
            $resultado->close();
            $this->_db->close();
        }
    }
    public function registrarAct($titulo, $fecha, $hora, $ubicacion, $email, $repetir, $tipoAct){
        $instruccion = "CALL registratAct('".$titulo."','".$fecha."','".$hora."','".$ubicacion."','".$email."','".$repetir."','".$tipoAct."')";
        $consulta = $this->_db->query($instruccion);
        $resultado = $consulta->fetch_all(MYSQLI_ASSOC);

        if(!$resultado){
            echo "Fallo al consultar las actividades";
        }else{
            return $resultado;
            $resultado->close();
            $this->_db->close();
        }
    }
    public function editarAct($id, $titulo, $fecha, $hora, $ubicacion, $email, $repetir, $tipoAct){
        $instruccion = "CALL editartAct(".$id.",'".$titulo."','".$fecha."','".$hora."','".$ubicacion."','".$email."','".$repetir."','".$tipoAct."')";
        $consulta = $this->_db->query($instruccion);
        $resultado = $consulta->fetch_all(MYSQLI_ASSOC);

        if(!$resultado){
            echo "Fallo al consultar las actividades";
        }else{
            return $resultado;
            $resultado->close();
            $this->_db->close();
        }
    }
    public function eliminarAct($idAct){
        $instruccion = "CALL eliminarAct(".$idAct.")";
        $consulta = $this->_db->query($instruccion);
        $resultado = $consulta->fetch_all(MYSQLI_ASSOC);

        if(!$resultado){
            echo "Fallo al consultar las actividades";
        }else{
            return $resultado;
            $resultado->close();
            $this->_db->close();
        }
    }
    
}

?>