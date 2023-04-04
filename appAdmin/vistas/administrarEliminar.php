

<!doctype html>
<html lang="en">
  <head>
  	<title>Menu Modificar Usuarios</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
		
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="/static/css/swiper.css" rel="stylesheet">
	    <link href="/static/css/styles.css" rel="stylesheet">
        <link rel="stylesheet" href="/static/css/styleMenu.css">
  </head>
  <body>
		
		<div class="wrapper d-flex align-items-stretch">
			<nav id="sidebar">
	  		<div class="img bg-wrap text-center py-4" style="background-image: url(/static/img/bg_1.jpg);">
	  			<div class="user-logo">
	  				<div class ="img"><?php echo "<img src=".$_SESSION['avatar'].">"?></div>
	  				<h3 class="Usuario"><?php  unset($_SESSION['idDocenteConsulta']); unset($_SESSION['idChat']);echo $_SESSION['nombre']."  ".$_SESSION['apellido']?></h3>
	  			</div>
	  		</div>
        <ul class="list-unstyled components mb-5">
          <li>
            <a href="menuAdmin"><span class="fa fa-home mr-3"></span> Menu</a>
          </li>
          <li>
            <a href="salir"><span class="fa fa-sign-out mr-3"></span> Salir</a>
          </li>
        </ul>

    	</nav>

        <!-- Page Content  -->
      <div id="content" class="p-4 p-md-5 pt-5">
        <h2 class="mb-4">Menu Eliminar Usuarios</h2>
        <div style="margin-left:480px; margin-top:220px;">
        <a style="margin-right:62px;font-size: 20px;" class="btn-solid-lg page-scroll" href="listaDeUsuariosParaEliminar">Listar Todas los Usuarios</a>
</div>
    <div style="margin-top:130px;margin-left:496px;">
        <a style="padding-right:50px;font-size: 20px;" class="btn-solid-lg page-scroll" href="busquedaFocalizadaEliminar">Busqueda Focalizada</a>
      </div>
      </div>
		</div>

    <script src="/static/js/jquery.min.js"></script>
    <script src="/static/js/popper.js"></script>
    <script src="/static/js/bootstrap.min.js"></script>
    <script src="/static/js/mainMenu.js"></script>
  </body>
</html>