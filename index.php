<?php
$pg ="inicio";

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
    <link rel="stylesheet" href="css/fontawsome/css/all.min.css">
    <link rel="stylesheet" href="css/fontawsome/css/fontawesome.min.css">
    <link rel="stylesheet" href="css/bootstrap/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700,800,900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="css/estilos.css">
</head>

<body id="inicio">
    <?php include_once "header.php"; ?>
    <main class="container">
        <div class="row">
            <div class="col-12 mt-4 text-center div-cohete">
                <a href="sobre-mi.html"> <img src="imagenes/cohete.svg" alt="cohete"></a>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-sm-6  text-center offset-sm-3">
                <div class="input-home">
                    <p class="p-1 text-center">Bienvenid@ a mi porfolio</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class=" mt-2 col-12 text-center">
                <a href="proyectos.html" class="btn btn-blanco shadow">Conoce mis proyectos</a>
            </div>
        </div>
    </main>
    <?php include_once "footer.php"; ?>
</body>
<script src="css/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>