<?php
// Verifica si el formulario fue enviado
if ($_SERVER["REQUEST_METHOD"] === "POST" && !empty($_POST["name"])) {
    // Obtén los datos del formulario
    $nombre = $_POST["name"];
    $email = $_POST["email"];
    $fecha = $_POST["date"];
    $hora = $_POST["time"];
    $num_invitados = $_POST["guests"];

    // Establece la conexión a la base de datos (cambia las credenciales según tu configuración)
    $servername = "localhost";
    $username = "root";
    $password = "1234T1CS";
    $dbname = "ConSal"; // Reemplaza "ConSal" con el nombre de tu base de datos

    // Crea la conexión
    $conexion = new mysqli($servername, $username, $password, $dbname);

    // Verifica si la conexión fue exitosa
    if ($conexion->connect_error) {
        die("Error en la conexión a la base de datos: " . $conexion->connect_error);
    }

    // Prepara la consulta SQL para insertar los datos en la tabla
    $sql = "INSERT INTO reservas (nombre, email, fecha, hora) VALUES (?, ?, ?, ?)";
    $stmt = $conexion->prepare($sql);

    // Asocia los datos a la consulta y ejecútala
    $stmt->bind_param("ssss", $nombre, $email, $fecha, $hora);
    if ($stmt->execute()) {
        echo "Reserva realizada exitosamente.";
    } else {
        echo "Error al realizar la reserva: " . $stmt->error;
    }

    // Cierra la conexión y libera recursos
    $stmt->close();
    $conexion->close();
}
?>
