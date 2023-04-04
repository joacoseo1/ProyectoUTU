<!DOCTYPE html>
<html lang="en">
<head>
	<title>Registro</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
<link rel="icon" type="image/png" href="/static/img/icons/favicon.ico"/>
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
                        <a class="nav-link" aria-current="page" href="inicio">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="">FAQ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="">Contacto</a>
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

				<form class="login100-form validate-form" method="post" action="/registrarUsuario">
					<span class="login100-form-title">
						Usuario
					</span>

					<div class="wrap-input100 validate-input" data-validate = "Ingrese nombre">
						<input class="input100" type="text" name="nombre" placeholder="Nombre">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-user-circle" aria-hidden="true"></i>
						</span>
					</div>

                    <div class="wrap-input100 validate-input" data-validate = "Ingrese apellido">
						<input class="input100" type="text" name="apellido" placeholder="Apellido">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-user-circle" aria-hidden="true"></i>
						</span>
					</div>

                    <div class="wrap-input100 validate-input" data-validate = "Ingrese cedula de 8 digitos">
						<input class="input100" type="text" name="cedula" placeholder="Cedula">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-id-card" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Ingrese edad">
						<input class="input100" type="number" name="edad" placeholder="Edad">
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
                    <input type="hidden" name="password" value = "1234">
       
                    <div class="wrap-input100 validate-input" data-validate = "">
                    <label class="radio-inline" style="margin-left:40px;margin-right:40px;margin-top:15px;">
                    <input type="radio" name="tipo" checked style="margin-right:10px;" value="alumno">Alumno
                    </label>
                    <label class="radio-inline">
                    <input type="radio" name="tipo" style="margin-right:10px;" value="docente">Docente
                    </label>
					</div>
					
					<div class="container-login100-form-btn">
						<button type="submit" class="login100-form-btn">
							Registrar
						</button>
					</div>
                    <div class="text-center p-t-50">
						<a style="font-size:15px;" class="txt2" href="menuAdmin">
							Volver al menu
							<i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
	
	

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

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>

<!--===============================================================================================-->
	<script src="/static/js/main.js"></script>
</div>
</body>
</html>