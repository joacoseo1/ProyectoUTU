<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login</title>
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

				<form class="login100-form validate-form" method="post" action="/loginAdmin">
					<span class="login100-form-title">
						Administrador
					</span>

					<div class="wrap-input100 validate-input" data-validate = "Cedula incorrecta">
						<input class="input100" type="text" name="cedula" placeholder="Cedula">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-id-card" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Contraseña incorrecta">
						<input class="input100" type="password" name="password" placeholder="Contraseña">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>
					<input type="text" name="tipo" value="admin" style="visibility:hidden">
					
					<div class="container-login100-form-btn">
						<button type="submit" class="login100-form-btn">
							Login
						</button>
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
<!--===============================================================================================-->
	<script src="/static/js/main.js"></script>

</body>
</html>