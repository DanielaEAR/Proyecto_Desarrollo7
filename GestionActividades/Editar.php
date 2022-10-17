<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/estilos.css">
    <title>Edición de Actividades</title>
</head>
<body>
    <!-- Integración de la clases -->
<?php
    require_once('../class/TipoActividad.php');
    require_once('../class/Actividad.php');
    $valorRes = 0;
?>
    <!-- Menu de la aplicacion -->
<ul>
  <li><a href="ResumenActividad.php">Inicio</a></li>
  <li><a href="ProyectPrincipal.php">Mis Actividades</a></li>
  <li><a href="Reporte.php">Reportes</a></li>
</ul>

 <!-- Formulario de las actividades -->
<div class="container mt-5">
    <div class="row">
        <div class="col-md-3">
            <h1>Agenda de Actividades</h1>
            <form name="registro" action="Crear.php" method="POST">
            <?php
                $obj_buscAct = new Actividad();
                $buscAct = $obj_buscAct->consultarUnaAct($_GET['id']);
                $nfilasA = count($buscAct);

                if($nfilasA > 0){
                    foreach($buscAct as $resultAc){
                        print("<input type='text' name='titulo'  value='".$resultAc['titulo']."'><br><br>");
                        print("<input type='date' name='fecha'  value='".$resultAc['fecha']."'><br><br>");
                        print("<input type='time' name='hora' value='".$resultAc['hora']."'> <br> <br>");
                        print("<input type='text' name='ubicacion' value='".$resultAc['ubicacion']."'><br><br>");
                        print("<input type='text' name='email' value='".$resultAc['email']."'><br><br>");
                        print("<b><p>Desea repetir todo el dia:</p></b>");
                    } 
                }            
            ?>
                <!--<input type="text" name="titulo"  placeholder="Título de la Actividad"><br><br>
                <input type="date" name="fecha"  placeholder="Fecha"><br><br>
                <input type='time' name='hora' value="00:00:00" placeholder="Hora"> <br> <br>
                <input type="text" name="ubicacion" placeholder="Ubicación"><br><br>
                <input type="text" name="email"  placeholder="Email"><br><br>-->
                <!-- radio button para repetir la actividad 
                <b><p>Desea repetir todo el dia:</p></b> -->
                    <!-- seleccion Si -->
                    <input id=res type="radio" id="si" name="rs" value="si">SI<br>
                    <!-- seleccion NO -->
                    <input id=res type="radio" id="no" name="rs" value="no">NO<br><br>
                    <!-- fecha 24 horas -->     
                    <input id='h' type='time' name='horaR' value="23:53:00"> <br> <br>
                    <?php
                        if(array_key_exists('rs', $_POST)){
                            if($_REQUEST['rs'] == "si"){
                                $valorRes = "23:53";
                            }else{
                                $valorRes = $_REQUEST['horaR'];
                            }   
                        }
                    ?>
                <!-- Select para elegir el tipo de actividad -->
                <b><p>Tipo de Actividad</p></b>
                <SELECT name="tiposA">
                    <OPTION value="0" SELECTED>Tipo
                    <?php
                        $obj_tipoA = new TipoActividad();
                        $tipoA = $obj_tipoA->consultar_tiposAct();
                        $nfilas=count($tipoA);

                        if($nfilas > 0){
                            foreach($tipoA as $resultado){
                                print("<OPTION value='".$resultado['id_tipoAct']."'>".$resultado['nombreAct']."<br>");
                            }             
                    ?>
                </SELECT><br><br>
                    <?php
                        }else{
                            print("No hay Tipo de Actividades Disponibles <br>");
                        }
                    ?>
                <br>
                <!-- Validar que los campos no estén vacíos -->
                <input type="submit" value="AGREGAR"><br><br>
            </form>
        </div>
    </div>
</div>

</body>
</html>