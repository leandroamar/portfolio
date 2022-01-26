<?php
$pg= "contacto";

if($_POST){
  $nombre = $_POST["txtNombre"];
  $correo = $_POST["txtCorreo"];
  $telefono = $_POST["txtTelefono"];
  $mensaje = $_POST["txtMensaje"];

  // Varios destinatarios
$para  = 'leandro.mathias.amar@gmail.com';

// título
$título = 'Recibiste un mesaje de tu Web';

// mensaje
$cuerpo = "
Nombre = $nombre <br>
Correo = $correo<br>
Telefono = $telefono<br>
Mensaje = $mensaje<br>
";

// Para enviar un correo HTML, debe establecerse la cabecera Content-type
$cabeceras  = 'MIME-Version: 1.0' . "\r\n";
$cabeceras .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
 
// Cabeceras adicionales
$cabeceras .= 'To: leandro.mathias.amar@gmail.com' . "\r\n";
$cabeceras .= 'From: contacto@leandro.com.ar' . "\r\n";

header("location: gracias-por-contactarme.php");

// Enviarlo
mail($para, $título, $cuerpo, $cabeceras);

}
?>

<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contacto</title>
  <link rel="stylesheet" href="css/fontawsome/css/all.min.css">
  <link rel="stylesheet" href="css/fontawsome/css/fontawesome.min.css">
  <link rel="stylesheet" href="css/bootstrap/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700,800,900&display=swap"
    rel="stylesheet">
  <link rel="stylesheet" href="css/estilos.css">
</head>

<body id="contacto">
  <?php include_once "header.php"; ?>
  <main class="container">
    <div class="row">
      <div class="col-12 pt-4 pb-5">
        <h1>Contacto</h1>
      </div>
    </div>
    <div class="row">
      <div class="col-12 col-sm-6">
        <p>Te invito a que te contactes enviándome un mensaje o bien por Whatsapp.</p>
      </div>
      <div class="col-12 col-sm-6">
        <form action="" method="post">
          <div class="pb-3">
            <input type="text" name="txtNombre" id="txtNombre" placeholder="Nombre" class="form-control shadow">
          </div>
          <div class="pb-3">
            <input type="email" name="txtCorreo" id="txtCorreo" placeholder="Correo" class="form-control shadow">
          </div>
          <div class="pb-3">
            <input type="tel" name="txtTelefono" id="txtTelefono" placeholder="Telefono/Whatsapp"
              class="form-control shadow">
          </div>
          <div class="pb-3">
            <textarea name="txtMensaje" id="txtMensaje" placeholder="Escribe aquí tu mensaje"
              class="form-control shadow"></textarea>
          </div>
          <div class="pb-3 float-end float-sm-start">
            <button type="submit" id="btnEnviar" name="btnEnviar" class="btn btn-blanco shadow px-4">ENVIAR</button>
          </div>
        </form>
      </div>
    </div>
  </main>
  <?php include_once "footer.php"; ?>
</body>
<script src="css/bootstrap/js/bootstrap.bundle.min.js"></script>
</html>