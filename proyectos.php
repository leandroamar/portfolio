<?php
$pg= "proyectos";

?>


<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proyectos</title>
    <link rel="stylesheet" href="css/fontawsome/css/all.min.css">
    <link rel="stylesheet" href="css/fontawsome/css/fontawesome.min.css">
    <link rel="stylesheet" href="css/bootstrap/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700,800,900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="css/estilos.css">
</head>

<body id="proyectos">
    <?php include_once "header.php"; ?>
    <main class="container">
        <div class="row">
            <div class="col-12 pt-4 pb-5">
                <h1>Proyectos</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-sm-6">
                <p>Los siguientes son algunos de los trabajos que vemos en clase:</p>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-sm-4 proyecto">
                <div class="m-1 border bg-white">
                    <div>
                        <img src="imagenes/abmclientes.png" alt="AMB clientes" class="img-fluid">
                    </div>
                    <div class="bg-danger py-2 ps-3">
                        <h3>ABM CLIENTES</h3>
                    </div>
                    <div class="px-3 py-2">
                        <p>Alta, baja y modificación de un registro de clientes. Realizado en HTML, CSS, PHP, Bootstrap
                            y Json.
                        </p>
                    </div>
                    <div class="row mb-4 p-0 ps-3">
                        <div class="col-6">
                            <a href="http://>https://nelsontarche.com.ar/sistema/abmclientes/"
                                class="btn btn-rojo p-2">Ver online</a>
                        </div>
                        <div class="col-6 p-0 text-center">
                            <a href="http://github.com" target="_blank" class="btn-link">Código fuente</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-4 proyecto">
                <div class="m-1 border bg-white">
                    <div>
                        <img src="imagenes/abmventas.png" alt="AMB ventas" class="img-fluid">
                    </div>
                    <div class="bg-danger py-2 ps-3">
                        <h3>SISTEMA DE GESTIÓN DE VENTAS</h3>
                    </div>
                    <div class="px-3 py-2">
                        <p>Sistema de gestión de clientes, productos y ventas. Realizado en HTML, CSS, PHP, MVC,
                            Bootstrap, Js, Ajax, jQuery y MySQL de base de datos.
                        </p>
                    </div>
                    <div class="row mb-4 p-0 ps-3">
                        <div class="col-6">
                            <a href="http://>https://nelsontarche.com.ar/sistema/abmclientes/"
                                class="btn btn-rojo p-2">Ver online</a>
                        </div>
                        <div class="col-6 p-0 text-center">
                            <a href="http://github.com" target="_blank" class="btn-link">Código fuente</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-4 proyecto">
                <div class="m-1 border bg-white">
                    <div>
                        <img src="imagenes/proyecto-integrador.png" alt="proyecto integrador" class="img-fluid">
                    </div>
                    <div class="bg-danger py-2 ps-3">
                        <h3>PROYECTO LARAVEL</h3>
                    </div>
                    <div class="px-3 py-2">
                        <p>Proyecto Full Stack desarrollado en PHP, Laravel, Javascript, jQuery, AJAX, HTML, CSS,
                            Mercadopago con panel administrador, gestor de usuarios, módulo de permisos y
                            funcionalidades a fines.
                        </p>
                    </div>
                    <div class="row mb-4 p-0 ps-3">
                        <div class="col-6">
                            <a href="http://>https://nelsontarche.com.ar/sistema/abmclientes/"
                                class="btn btn-rojo p-2">Ver online</a>
                        </div>
                        <div class="col-6 p-0 text-center">
                            <a href="http://github.com" target="_blank" class="btn-link">Código fuente</a>
                        </div>
                    </div>
                </div>
            </div>
    </main>
    <?php include_once "footer.php"; ?>
</body>
<script src="css/bootstrap/js/bootstrap.bundle.min.js"></script>
</html>