

<!doctype html>
<html lang="en">
  <head>
  	<title>Menu</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="/static/css/styleMenu.css">
    <link rel="stylesheet" href="/static/css/addGrupo.css">
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

        <div id="content" class="p-4 p-md-5 pt-5">
        <h2 class="mb-4">Añadir Grupos</h2>
        <section>
            <form class="formulario" method="post" action="altaGrupo">
            <div class="datos">
                <legend>Ingrese nombre del Grupo</legend>
                <p>Grupo</p>
                <input class="datosInput" type="text" name="grupoNombre" placeholder="Nombre del grupo">
                <input class="botonAceptar" type="submit" value="Añadir">
</div>
            </form>
        </section>
</div>

    <script src="/static/js/jquery.min.js"></script>
    <script src="/static/js/popper.js"></script>
    <script src="/static/js/bootstrap.min.js"></script>
    <script src="/static/js/mainMenu.js"></script>
  </body>
</html>