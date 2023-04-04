<!DOCTYPE html>
<html lang="en">
<head>
	<title>Registro</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="/static/img/png" href="/static/img/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="/static/xdxd/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="/static/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="/static/xdxd/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="/static/xdxd/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="/static/xdxd/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="/static/css/util.css">
	<link rel="stylesheet" type="text/css" href="/static/css/main.css">
	<link href="/static/css/bootstrap.min.css" rel="stylesheet">
    <link href="/static/css/swiper.css" rel="stylesheet">
	<link href="/static/css/styles.css" rel="stylesheet">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
	<nav id="navbar" class="navbar navbar-expand-lg fixed-top navbar-dark" aria-label="Main navigation">
        <div class="container">

            <button class="navbar-toggler p-0 border-0" type="button" id="navbarSideCollapse" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="navbar-collapse offcanvas-collapse" id="navbarsExampleDefault">
                <ul class="navbar-nav ml-auto navbar-nav-scroll">
                    <li class="nav-item">
                        <a id="btninicio1" class="nav-link" aria-current="page" href="inicio">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="">FAQ</a>
                    </li>
                    <li class="nav-item">
                        <a id="btnContacto1" class="nav-link" href="">Contacto</a>
                    </li>
                </ul>
            </div>
        </div> 
    </nav> 
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-pic js-tilt" data-tilt>
					<img src="/static/img/img-01.png" alt="IMG">
				</div>

				<form class="login100-form validate-form" method="post" action="/insertarDocente">
					<span id="textT1" class="login100-form-title">
						Docente
					</span>

					<div class="wrap-input100 validate-input" data-validate = "Ingrese nombre">
						<input id="txtNombre" class="input100" type="text" name="nombre" placeholder="Nombre">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-user-circle" aria-hidden="true"></i>
						</span>
					</div>

                    <div class="wrap-input100 validate-input" data-validate = "Ingrese apellido">
						<input id="txtApellido" class="input100" type="text" name="apellido" placeholder="Apellido">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-user-circle" aria-hidden="true"></i>
						</span>
					</div>

                    <div class="wrap-input100 validate-input" data-validate = "Ingrese cedula de 8 digitos">
						<input id="txtCedula" class="input100" type="text" name="cedula" placeholder="Cedula">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-id-card" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Ingrese edad">
						<input id="txtEdad" class="input100" type="number" name="edad" placeholder="Edad">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-user-circle" aria-hidden="true"></i>
						</span>
					</div>

                    <div class="wrap-input100 validate-input" data-validate = "Ingrese email: user@email.com">
						<input class="input100" type="email" name="email" placeholder="Email">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope-o" aria-hidden="true"></i>
						</span>
					</div>

                    <div class="wrap-input100 validate-input" data-validate = "Ingrese password">
						<input id="txtContraseña" class="input100" type="password" name="password" placeholder="Contraseña">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>

                    <div class="wrap-input100 validate-input" data-validate = "Ingrese Password nuevamente">
						<input id="txtValidar" class="input100" type="password" name="password2" placeholder="Validar Contraseña">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>
					<input type="text" name="tipo" value="docente" style="visibility:hidden">
					
					<div class="container-login100-form-btn">
						<button id="btnRegistrar" type="submit" class="login100-form-btn">
							Registrar
						</button>
					</div>

					<div class="text-center p-t-50">
						<a id="txtT2" lass="txt2" href="loginDocente">
							Ya tengo cuenta
							<i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
	
	

	<script src="/static/js/languages/singupDocente.js"></script>
<!--===============================================================================================-->	
	<script src="/static/xdxd/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="/static/xdxd/bootstrap/js/popper.js"></script>
	<script src="/static/xdxd/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="/static/xdxd/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="/static/xdxd/tilt/tilt.jquery.min.js"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
<!--===============================================================================================-->
	<script src="/static/js/main.js"></script>

</body>
</html>