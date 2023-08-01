<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pagina Reservas</title>
  <link rel="icon" href="img/paginaprincipal/logoconsal.jpg">
  <link rel="stylesheet" href="stylereservasCS.css">
</head>
<body>
<?php include_once('headerCS.php')?>
 <section id="reservas" class="reservas">
  <div class="container">
    <h2>Reservas</h2>
    <form action="procesar_formulario.php" method="post">
    <div class="form-group">
        <label for="name">Nombre</label>
        <input type="text" id="name" name="name" required>
    </div><br>
    <div class="form-group">
        <label for="email">Correo electrónico</label>
        <input type="email" id="email" name="email" required>
    </div><br>
    <div class="form-group">
        <label for="date">Fecha</label>
        <input type="date" id="date" name="date" required>
    </div><br>
    <div class="form-group">
        <label for="time">Hora</label>
        <input type="time" id="time" name="time" required>
    </div><br>
    <div class="form-group">
        <label for="guests">Número de invitados</label>
        <input type="number" id="guests" name="guests" required>
    </div>
    <br>
    <button type="submit" class="btn">Enviar</button>
</form>
  </div>
</section>
<br><br>
      <section class="seccioncontacto">
        <div class="containereservas">
          <div>
            <h2>Contacto</h2>
            <p>Para cualquier consulta o solicitud de información, no dudes en contactarnos.</p>
            <form>
                <div class="mb-3">
                    <label for="name" class="form-label">Nombre</label>
                    <input type="text" id="name" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Correo electrónico</label>
                    <input type="email" id="email" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label for="message" class="form-label">Mensaje</label>
                    <textarea id="message" class="form-control" required></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Enviar</button>
            </form>
          </div>
        </div>
      </section>
<br><br>
      <a href="consultasReservas.php">Consultas</a>
<a href="modificarreservas.php">Modificar Reservas</a>
<?php include_once('footerCS.php')?>
</body>
</html>