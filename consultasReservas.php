<?php 
require "conexionBDCS.php";
$sql="SELECT * FROM reservas";

$result = mysqli_query($con,$sql);

echo "<h2>Reservas registradas</h2>";
 echo "<table border=1 </th>";
 echo "<tr>
       <th> ID </th>
       <th> Nombre </th>
       <th> Fecha </th>
       <th> Hora </th>
       <th> #Invitados</th>
       <th> Eliminar</th>
       <th> Editar</th>
       </tr>";
       while ($fila = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<td>" . $fila['id'] . "</td>";
        echo "<td>" . $fila['nombre'] . "</td>";
        echo "<td>" . $fila['email'] . "</td>";
        echo "<td>" . $fila['fecha'] . "</td>";
        echo "<td>" . $fila['hora'] . "</td>";
        echo "<td>" . "<a href='modificacionesForm.php?idEmpleado=" . $fila['idEmpleado'] . "'>Editar </a>" . "</td>";
        echo "</tr>";
    }
    echo "</table>";
   ?>