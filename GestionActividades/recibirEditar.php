<?php
require_once('../class/Actividad.php');

    if(array_key_exists('titulo', $_POST)  && array_key_exists('fecha', $_POST) &&
       array_key_exists('hora', $_POST)  && array_key_exists('ubicacion', $_POST) &&
       array_key_exists('email', $_POST) && array_key_exists('tiposA', $_POST)){

        $obj_editarAct = new Actividad();
        $editar = $obj_editarAct->editarAct($_REQUEST['id'], $_REQUEST['titulo'], $_REQUEST['fecha'], $_REQUEST['hora'], 
                                            $_REQUEST['ubicacion'], $_REQUEST['email'], $valorRes, $_REQUEST['tiposA']);
        if($editar > 0){
        //Se ingresó correctamente
            print("<script> alert('Se Actualizó correctamente'); </script>");
            //Reedirecciona hacia la página principal de gestión de actividades
            print("<script type='text/javascript'> window.location.href = 'ProyectPrincipal.php'; </script>");
        }else{
            //No se ingresó correctamente
            print("<script> alert('Revisar Campos'); </script>");
            print("<script type='text/javascript'> window.location.href = 'Editar.php'; </script>");
        }
    }
?>