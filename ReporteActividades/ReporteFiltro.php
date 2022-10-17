<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reporte de Actividades</title>
</head>
<body>
<?php
    require_once('../class/Actividad.php');
?>
        <!-- Menu de la aplicacion -->
    <nav>
        <ul>
            <li><a href="../Inicio.php">Inicio</a></li>
            <li><a href="../GestionActividades/ProyectPrincipal.php">Mis Actividades</a></li>
            <li><a href="ReporteFiltro.php">Reportes</a></li>
        </ul>
    </nav>
    <Form name="Formfiltro" method="post" action="ReporteFiltro.php">
        <br/>
        Filtrar Por: 
        <SELECT name="campos">
            <OPTION value="DAY" SELECTED>Día
            <OPTION value="WEEKOFYEAR">Semana
            <OPTION value="MONTH">Mes
            <OPTION value="YEAR">Año
        </SELECT>
        con la fecha de
        <input type="number" name="fechaValor"> 
        <input name="ConsultarFiltro" value="Filtrar Datos" type="submit"/>
        <input name="ConsultarTodos" value="Ver Todos" type="submit"/>
    </Form>
    <br/>
    <?php
        $obj_repoAct = new Actividad();
        $reporte = $obj_repoAct->consultarTodo();
        
        if(array_key_exists('ConsultarTodos', $_POST)){
            $obj_repoAct = new Actividad();
            $reporte_todos = $obj_repoAct->consultarTodo();
        }
        if(array_key_exists('ConsultarFiltro', $_POST)){
            $obj_repoAct = new Actividad();
            $reporte = $obj_repoAct->mostrar_reporte($_REQUEST['campos'], $_REQUEST['fechaValor']);
        }

        $nfilas=count($reporte);
        if($nfilas == 0){
            print("<script> alert('Valor de Fecha Incorrecto'); </script>");
            print("<script type='text/javascript'> window.location.href = 'ReporteFiltro.php'; </script>");
        }else{

    ?>
    <TABLE>
        <TR>
            <TH>Titulo</TH>
            <TH>Fecha</TH>
            <TH>Hora</TH>
            <TH>Ubicación</TH>
            <TH>Email</TH>
            <TH>Repetir Actividad</TH>
            <TH>Tipo de Actividad</TH>
        </TR>
        <?php

            if($nfilas > 0){
                foreach($reporte as $resultado){
                    print("<TR>\n");
                    print("<TD>".$resultado['titulo']."</TD>\n");
                    print("<TD>".$resultado['fecha']."</TD>\n");
                    print("<TD>".$resultado['hora']."</TD>\n");
                    print("<TD>".$resultado['ubicacion']."</TD>\n");
                    print("<TD>".$resultado['email']."</TD>\n");
                    print("<TD>".$resultado['repetirAct']."</TD>\n");
                    print("<TD>".$resultado['nombreAct']."</TD>\n");
                    print("</TR\n");
                }        
            }else{
                print("No hay Tipo de Actividades el Día de Hoy <br>");
            }
        }
        ?>
    </TABLE>
</body>
</html>

