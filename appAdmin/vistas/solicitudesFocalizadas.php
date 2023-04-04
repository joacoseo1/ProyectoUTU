<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Busqueda Focalizada</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="/static/css/styleMenu.css">
    <link rel="stylesheet" href="/static/css/eliminar.css">
</head>
<body>
<div class="wrapper d-flex align-items-stretch">
    <?php if(isset($parametros['falla']) && $parametros['falla'] == true): ?>
        <div style="color: #FF0000"><h3> Datos incorrectos Verifique Cedula o Contraseña </h3></div>
    <?php endif; ?>
			<nav id="sidebar">
	  		<div class="img bg-wrap text-center py-4" style="background-image: url(/static/img/bg_1.jpg);">
	  			<div class="user-logo">
	  				<div class ="img"><?php echo "<img src=".$_SESSION['avatar'].">"?></div>
	  				<h3 class="Usuario"><?php unset($_SESSION['idConsulta']) ;echo $_SESSION['nombre'] . " " . $_SESSION['apellido']?></h3>
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
        <section>
        <h1>Busqueda Focalizada</h1>
            <form class="formulario" method="post" action="busquedaFocalizada">
            <div class="datos">
                <legend>Ingrese Cedula a Buscar</legend>
                <p>Cedula</p>
                <input class="datosInput" type="text" name="cedula" placeholder="Cedula">
                <input class="botonAceptar" type="submit" value="Buscar">
</div>
            </form>
        </section>
</div>
</div>
</body>
</html>