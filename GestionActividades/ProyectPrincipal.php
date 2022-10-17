<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/estilos.css">
    <title>Agenda Estudiantil</title>
</head>
<body>
    <!-- Integración de la clases -->
<?php
    require_once('../class/Actividad.php');
?>   
    <!-- Menu de la aplicacion -->
<ul>
  <li><a href="../Inicio.php">Inicio</a></li>
  <li><a href="ProyectPrincipal.php">Mis actividades</a></li>
  <li><a href="../ReporteActividades/ReporteFiltro.php">Reportses</a></li>
</ul>
<div class="col-md-8">
    <h1>Mis Actividades</h1>
    <table class="table">
        <thead>
            <tr>
                <th>#</th>
                <th>Titulo</th>
            </tr>
        </thead>
        <tbody>  
        <?php
            $obj_todasAc = new Actividad();
            $todasAct = $obj_todasAc->consultarTodasAct();
            $nfilasT=count($todasAct);

            if($nfilasT > 0){
                foreach($todasAct as $resTodas){
                    print("<tr>");
                    print("<th>".$resTodas['id_actividad']."</th>");
                    print("<th>".$resTodas['titulo']."</th>");
                    $idA = $resTodas['id_actividad'];
                    print("<th><a href='Editar.php?id=$idA'>Editar</a></th>");
                    print("<th><a href='Eliminar.php?id=$idA'>Eliminar</a></th>");
                    print("</tr>");
                } 
            }
        ?>
        </tbody>
    </table>
</div>
<br><br><br>
<button><a href="Crear.php">CREAR ACTIVIDAD</a></button>
</body>
</html>