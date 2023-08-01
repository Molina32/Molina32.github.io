<?php

require 'conexionBDCS.php'; ?>
<html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/estilos.php">
</head>
<body>
<h1>MODIFICACIONES RESERVAS</h1>
<div class="contenedor">
    <form action="cambiosEmpleados.php" method="POST">
        <input type="text" id="id" name="id" value="<?php echo $fila['id']; ?>">
        <div class="form-group">
            <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" name="nombre" value="<?php echo $fila['nombre']; ?>">
        </div>
        <div class="form-group">
            <label for="puesto">Email</label>
            <input type="emial" id="email" name="email" value="<?php echo $fila['email']; ?>">
        </div>
        <div class="form-group">
            <label for="puesto">Fecha</label>
            <input type="date" id="fecha" name="fecha" value="<?php echo $fila['fecha']; ?>">
        </div>
        <div class="form-group">
            <label for="puesto">Hora:</label>
            <input type="time" id="hora" name="hora" value="<?php echo $fila['hora']; ?>">
        </div>
        <input type="submit" value="Guardar">
    </form>
</div>
</body>
</html>