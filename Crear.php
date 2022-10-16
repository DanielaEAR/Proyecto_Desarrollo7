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
    
    <!-- Menu de la aplicacion -->
<ul>
  <li><a href="ResumenActividad.php">Inicio</a></li>
  <li><a href="#">Mis actividades</a></li>
  <li><a href="#">Reportes</a></li>
</ul>

 <!-- Formulario de las actividades -->
    <div class="container mt-5">

        <div class="row">
                <div class="col-md-3">
                <h1>Agenda de actividades</h1>
                <form action="ProyectPrincipal.php" method="POST">
                            <input type="hidden" name="id">
                            <input type="text" name="titulo"  placeholder="Agregue un titulo">
                            <input type="date" name="fecha"  placeholder="Agregue una hora">
                            <input type="text" name="ubicacion" placeholder="Agregue una ubicacion">
                            <input type="text" name="email"  placeholder="Agregue su email">
                            <!-- radio button para repetir la actividad -->
                                 <b><p>Desea repetir todo el dia:</p></b>
                                <!-- seleccion Si -->
                                <input type="radio" id="si" name="rs" value="si">
                                <label for="si">SI</label><br>
                                <!-- seleccion NO -->
                                <input type="radio" id="no" name="rs" value="no">
                                <label for="no">NO</label><br>
                                <!-- fecha 24 horas -->      
                            <input id="appt-time" type="time" name="appt-time" value="00:00"> <br> <br>
                            <input type="submit" value="AGREGAR">
                </form>
            </div>
        </div>

    </div>
    
</body>
</html>