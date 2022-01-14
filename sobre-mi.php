<?php
$pg= "sobre-mi";

?>


<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sobre mí</title>
    <link rel="stylesheet" href="css/fontawsome/css/all.min.css">
    <link rel="stylesheet" href="css/fontawsome/css/fontawesome.min.css">
    <link rel="stylesheet" href="css/bootstrap/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700,800,900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="css/estilos.css">
</head>

<body id="sobre-mi">
    <?php include_once "header.php"; ?>
    <main class="container">
        <div class="row">
            <div class="col-sm-5 col-12 mt-4">
                <h1 class="mt-sm-4 pb-sm-4">Sobre mí</h1>
                <p class="pb-sm-5">Después de una decada de dedicarme a la docencia, he encontrado en la programación nuevos desafíos y y así continuar mi crecimiento personal y profesional.</p>
                <a href="contacto.php" class="btn btn-rojo">Enviar mensaje</a>
            </div>
            <div class="col-sm-3 col-12 mt-4 offset-sm-2">
                <img src="imagenes/FotoLeandro.png" alt="Leandro Amar" title="Leandro Amar" class="img-fluid img-circle">
            </div>
        </div>
        <section id="tecnologias" class="pb-5">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h2 class="my-sm-5 text-white">Stack tecnológico</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-2 col-6 text-center">
                        <div class="px-4 py-5 card mx-0 mb-4 mb-sm-0">
                            <h6>Javascript</h6> <img class="img-fluid d-block mx-auto" width="60"src="https://img.stackshare.io/service/1209/javascript.jpeg">
                        </div>
                    </div>
                    <div class="col-sm-2 col-6 text-center">
                        <div class="px-4 py-5 card mx-0 mb-4 mb-sm-0"> 
                            <h6>PHP</h6> <img class="img-fluid d-block mx-auto" width="60"src="https://img.stackshare.io/service/991/hwUcGZ41_400x400.jpg">
                        </div>
                    </div>
                    <div class="col-sm-2 col-6 text-center"> 
                        <div class="px-4 py-5 card mx-0 mb-4 mb-sm-0">
                            <h6>HTML5</h6> <img class="img-fluid d-block mx-auto" width="60" src="https://img.stackshare.io/service/2538/kEpgHiC9.png">
                        </div>
                    </div>
                    <div class="col-sm-2 col-6 text-center">
                        <div class="px-4 py-5 card mx-0 mb-4 mb-sm-0">
                            <h6>React.js</h6> <img class="img-fluid d-block mx-auto" width="60" src="https://img.stackshare.io/service/1020/OYIaJ1KK.png">
                        </div>
                    </div>
                    <div class="col-sm-2 col-6 text-center">
                        <div class="px-4 py-5 card mx-0 mb-4 mb-sm-0">
                            <h6>jQuery</h6> <img class="img-fluid d-block mx-auto" width="60" src="https://img.stackshare.io/service/1021/lxEKmMnB_400x400.jpg">
                        </div>
                    </div>
                    <div class="col-sm-2 col-6 text-center">
                        <div class="px-4 py-5 card mx-0 mb-4 mb-sm-0">
                            <h6>Bootstrap</h6> <img class="img-fluid d-block mx-auto" width="60" src="https://img.stackshare.io/service/1101/C9QJ7V3X.png">
                        </div>
                    </div>
                </div>
                <div class="row mt-sm-4 mt-0">
                    <div class="col-sm-2 col-6">
                        <div class="px-4 py-5 card mx-0 mb-4 mb-sm-0">
                            <h6>Laravel</h6> <img class="img-fluid d-block mx-auto" width="90" src="https://depcsuite.com/wp-content/uploads/2019/08/220px-Laravel.svg_.png">
                        </div>
                    </div>
                    <div class="col-sm-2 col-6 text-center">
                        <div class="px-4 py-5 card mx-0 mb-4 mb-sm-0">
                            <h6>MySQL</h6> <img class="img-fluid d-block mx-auto" width="60" src="https://img.stackshare.io/service/1615/mariadb-logo-400x400.png">
                        </div>
                    </div>
                    <div class="col-sm-2 col-6 text-center">
                        <div class="px-4 py-5 card mx-0 mb-4 mb-sm-0">
                            <h6>CSS</h6> <img class="img-fluid d-block mx-auto" width="60"src="https://img.stackshare.io/service/6727/css.png">
                        </div>
                    </div>
                    <div class="col-sm-2 col-6 text-center">
                        <div class="px-4 py-5 card mx-0 mb-4 mb-sm-0">
                            <h6>Git</h6> <img class="img-fluid d-block mx-auto" width="60" src="https://img.stackshare.io/service/1046/git.png">
                        </div>
                    </div>
                    <div class="col-sm-2 col-6 text-center">
                        <div class="px-3 py-5 card mx-0 mb-4 mb-sm-0">
                            <h6>Apache</h6> <img class="img-fluid d-block mx-auto" width="125" src="https://upload.wikimedia.org/wikipedia/commons/d/db/Apache_Software_Foundation_Logo_%282016%29.svg">
                        </div>
                    </div>
                    <div class="col-sm-2 col-6 text-center">
                        <div class="px-3 py-5 card mx-0 mb-4 mb-sm-0">
                            <h6>Mercadopago</h6> <img class="img-fluid d-block mx-auto" width="60"src="https://img.stackshare.io/service/12698/gUjuxmmd_400x400.jpg">
                        </div>
                    </div>
                </div>

            </div>
        </section>
        <section id="experiencia" class="container">
            <div class="row">
                <div class="col-12 pt-5 pb-4">
                    <h2><i class="fas fa-briefcase"></i> Experiencia laboral</h2>
                </div>
            </div>
            <div class="row shadow bg-white rounded">
                <div class="col-12">
                    <div class="row">
                        <div class="col-2 p-5 my-auto d-none d-sm-block">
                            <img src="imagenes/sanjavier.jpg" class="img-fluid baw" title="San Javier">
                        </div>
                        <div class="col-12- col-sm-10 p-3">
                            <h3>Profesor</h3>
                            <h4>San Javier English & Arts academy</h4>
                            <h5>2011 - presente</h5>
                            <p>Profesor de inglés, niveles desde elementary a advanced. Grupos de diferentes edades, principalmente niños y adolescentes.</p>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="row">
                        <div class="col-2 p-5 my-auto d-none d-sm-block">
                            <img src="imagenes/institutorush.jpg" class="img-fluid baw" title="Instituto Rush">
                        </div>
                        <div class="col-12 col-sm-10 p-3">
                            <h3>Profesor</h3>
                            <h4>Instituto Rush</h4>
                            <h5>2017 - present</h5>
                            <p>Profesor de inglés, niveles desde elementary a upper-intermediate. Grupos de diferentes edades, principalmente niños y adultos</p>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="row">
                        <div class="col-2 p-5 my-auto d-none d-sm-block">
                            <img src="imagenes/colegiosanjavier.jpg" class="img-fluid baw" title="San Javier">
                        </div>
                        <div class="col-12 col-sm-10 p-3">
                            <h3>Coordinador - Viajes de Estudios</h3>
                            <h4>ViaColegio San Javier</h4>
                            <h5>2018 - presente</h5>
                            <p>Coordinacion de viajes de estudios a paises de lengua inglesa.</p>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="row">
                        <div class="col-2 p-5 my-auto d-none d-sm-block">
                            <img src="imagenes/englishshow.jpg" class="img-fluid baw" title="San Javier">
                        </div>
                        <div class="col-12 col-sm-10 p-3">
                            <h3>Coordinador</h3>
                            <h4>San Javier English & Arts Academy - English Show</h4>
                            <h5>2013 - presente</h5>
                            <p>Coordinacion de talleres de escritura de guión para obra de teatro, baile y actuación. Dirección general de la puesta en escena.</p>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="row">
                        <div class="col-2 p-5 my-auto d-none d-sm-block">
                        <img src="imagenes/sin-logo.png" class="img-fluid baw" title="Stratford">
                        </div>
                        <div class="col-12- col-sm-10 p-3">
                            <h3>Profesor</h3>
                            <h4>Stratford I.C.L.I.</h4>
                            <h5>2012 - 2021</h5>
                            <p>Profesor de inglés, niveles desde elementary a upper-intermediate. Grupos de diferentes edades, principalmente adolescentes y adultos</p>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="row">
                        <div class="col-2 p-5 my-auto d-none d-sm-block">
                            <img src="imagenes/unt.jpg" class="img-fluid baw" title="unt">
                        </div>
                        <div class="col-12 col-sm-10 p-3">
                            <h3>Bibliotecario</h3>
                            <h4>English Libary - UNT</h4>
                            <h5>2009 - 2011</h5>
                            <p>Bibliotecario en la biblioteca de textos y escritos en inglés. Facultdad de Filosofía y Letras, Tucumán. Trabajo Ad honorem.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="formacion" class="container">
            <div class="row">
                <div class="col-12 pt-5 pb-4">
                    <h2><i class="fas fa-graduation-cap"></i> Formación acádémica</h2>
                </div>
            </div>
            <div class="row shadow bg-white rounded p-1">
                <div class="col-12 col-sm-6">
                    <div class="row">
                        <div class="col-2 py-3 my-auto d-none d-sm-block">
                            <img src="imagenes/depc.jpg" class="img-fluid baw" title="depcsuite">
                        </div>
                        <div class="col-12- col-sm-10 p-3">
                            <h3>Programador - en curso</h3>
                            <h4>DePCSuite</h4>
                            <h5>2021 – 2022</h5>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6">
                    <div class="row">
                        <div class="col-2 py-5 px-1 my-auto d-none d-sm-block">
                            <img src="imagenes/avea.jpg" class="img-fluid baw" title="AVEA">
                        </div>
                        <div class="col-12- col-sm-10 p-3">
                            <h3>Tripulante de Cabina de Pasajeros</h3>
                            <h4>AVEA</h4>
                            <h5>2018</h5>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6">
                    <div class="row">
                        <div class="col-2 py-3 my-auto d-none d-sm-block">
                            <img src="imagenes/sin-logo.png" class="img-fluid baw" title="Stratford">
                        </div>
                        <div class="col-12- col-sm-10 p-3">
                            <h3>Instructor de Inglés</h3>
                            <h4>Stratford I.C.L.I.</h4>
                            <h5>2008 – 2012</h5>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6">
                    <div class="row">
                        <div class="col-2 py-3 my-auto d-none d-sm-block">
                            <img src="imagenes/colegio.jpg" class="img-fluid baw" title="Colegio Reina de la Esperanza">
                        </div>
                        <div class="col-12- col-sm-10 p-3">
                            <h3> Polimodal, Economía y Gestión de las Organizaciones</h3>
                            <h4>Colegio Reina de la Esperanza</h4>
                            <h5>2001 – 2005</h5>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </section>
        <section id="formacion" class="container mb-5">
            <div class="row">
                <div class="col-12 pt-5 pb-4">
                    <h2><i class="fas fa-graduation-cap"></i> Cursos de desarrollo profesional</h2>
                </div>
            </div>
            <div class="row shadow bg-white rounded p-1">
                <div class="col-12 col-sm-6">
                    <div class="row">
                        <div class="col-2 py-3 my-auto d-none d-sm-block">
                            <img src="imagenes/sin-logo.png" class="img-fluid baw" title="cursos">
                        </div>
                        <div class="col-12- col-sm-10 p-3">
                            <h3>Resusicatación Cardiopulmonar y DEA</h3>
                            <h4>Cruz Roja Argentina</h4>
                            <h5>2019</h5>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6">
                    <div class="row">
                        <div class="col-2 py-3 my-auto d-none d-sm-block">
                            <img src="imagenes/sin-logo.png" class="img-fluid baw" title="cursos">
                        </div>
                        <div class="col-12- col-sm-10 p-3">
                            <h3>Semaninario anual Sharing Teaching Techniques</h3>
                            <h4>Colegio San Javier</h4>
                            <h5>2014 - 2019</h5>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6">
                    <div class="row">
                        <div class="col-2 py-3 my-auto d-none d-sm-block">
                            <img src="imagenes/sin-logo.png" class="img-fluid baw" title="cursos">
                        </div>
                        <div class="col-12- col-sm-10 p-3">
                            <h3>El aula afectiva</h3>
                            <h4>Taller dictado por Laura Lewis</h4>
                            <h5>2017</h5>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6">
                    <div class="row">
                        <div class="col-2 py-3 my-auto d-none d-sm-block">
                            <img src="imagenes/sin-logo.png" class="img-fluid baw" title="cursos">
                        </div>
                        <div class="col-12- col-sm-10 p-3">
                            <h3>ITC´s Pronunciation, Language and Literature</h3>
                            <h4>APIT</h4>
                            <h5>2012</h5>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6">
                    <div class="row">
                        <div class="col-2 py-3 my-auto d-none d-sm-block">
                            <img src="imagenes/sin-logo.png" class="img-fluid baw" title="cursos">   
                        </div>
                        <div class="col-12- col-sm-10 p-3">
                            <h3>Teaching English to Digital Native </h3>
                            <h4>Pearson</h4>
                            <h5>2012</h5>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6">
                    <div class="row">
                        <div class="col-2 py-3 my-auto d-none d-sm-block">
                            <img src="imagenes/sin-logo.png" class="img-fluid baw" title="cursos">
                        </div>
                        <div class="col-12- col-sm-10 p-3">
                            <h3>Adquisición y Didáctica de las Lenguas</h3>
                            <h4>UNT</h4>
                            <h5>2008</h5>
                            <p></p>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </section>
        <section id="idiomas">
            <div class="container">
                <div class="row py-5 mx-0">
                    <div class="col-sm-6 col-12 pb-3 pb-sm-0">
                        <div class="row mr-sm-1 bg-white card-idioma shadow me-sm-1">
                            <div class="col-4 text-center card">
                                <i class="fas fa-comment-alt"></i>
                            </div>
                            <div class="col-8 p-4">
                                <h2>IDIOMAS</h2>
                                <ul>
                                    <li>ESPAÑOL - Nativo</li>
                                    <li>INGLÉS - Avanzado C2 </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-12 pb-3 pb-sm-0">
                        <div class="row ml-sm-1 bg-white card-idioma shadow ms-sm-1">
                            <div class="col-4 text-center card">
                                <i class="fas fa-star"></i>
                            </div>
                            <div class="col-8 p-4">
                                <h2>HOBBIES</h2>
                                <ul>
                                    <li>Crossfit</li>
                                    <li>Cine/Teatro</li>
                                    <li>Videojuegos</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        </div>
    </main>
    <?php include_once "footer.php";?>
</body>

</html>