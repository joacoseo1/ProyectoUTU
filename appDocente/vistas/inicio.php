<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Your description">
    <meta name="author" content="Your name">
    <title>Inicio</title>
    
    <!-- Styles -->
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,400;0,600;0,700;1,400&family=Poppins:wght@600&display=swap" rel="stylesheet">
    <link href="/static/css/bootstrap.min.css" rel="stylesheet">
    <link href="/static/css/fontawesome-all.min.css" rel="stylesheet">
    <link href="/static/css/swiper.css" rel="stylesheet">
	<link href="/static/css/styles.css" rel="stylesheet">
    <link href="/static/css/idioma.css" rel="stylesheet">
	<link href="/static/css/img.css" rel="stylesheet">
	<!-- Favicon  -->
    <link rel="icon" href="images/favicon.png">
</head>
<body>
    
    <!-- Navigation -->
    <nav id="navbar" class="navbar navbar-expand-lg fixed-top navbar-dark" aria-label="Main navigation">
    <button id="english" name = "english"><img class ="img" src=/static/img/ingles.png></button>
    
    <button id="spanish" name = "spanish""><img class ="img" src=/static/img/español.png></button>
   
        <div class="container">

            <button class="navbar-toggler p-0 border-0" type="button" id="navbarSideCollapse" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="navbar-collapse offcanvas-collapse" id="navbarsExampleDefault">
                <ul class="navbar-nav ms-auto navbar-nav-scroll">
                    <li class="nav-item">
                        <a id="btninicio" class="nav-link active" aria-current="page" href="">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="">FAQ</a>
                    </li>
                    <li class="nav-item">
                        <a id="btnContacto" class="nav-link" href="">Contacto</a>
                    </li>
                </ul>
            </div>
        </div> 
    </nav> 

    <header id="header" class="header">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <h1 class="h1-large">TECH<br> EAGLE<br> WEB</h1>
                </div> <!-- end of col -->
                <div class="col-lg-6">
                    <div class="button-container">
                        <a id="btnIniciarSesion" class="btn-solid-lg page-scroll" href="loginDocente">Iniciar Sesion</a>
                        <a id="btnRegistrarse" class="btn-outline-lg page-scroll" href="singupDocente">Registrarse</a>
                    </div>
                </div> 
            </div>
        </div>
    </header> 
    <script src="/static/js/bootstrap.min.js"></script>
    <script src="/static/js/swiper.min.js"></script>
    <script src="/static/js/purecounter.min.js"></script>
    <script src="/static/js/scripts.js"></script>
    <script src="/static/js/Storage.js"></script>
    <script src="/static/js/languages/inicio.js"></script>
</body>
</html>