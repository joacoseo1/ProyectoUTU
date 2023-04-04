<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grupos</title>
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="/static/css/styleMenu.css">
    <link rel="stylesheet" href="/static/css/ingresarGrupo.css">
</head>
<body>
<div class="wrapper d-flex align-items-stretch">
			<nav id="sidebar">
	  		<div class="img bg-wrap text-center py-4" style="background-image: url(/static/img/bg_1.jpg);">
	  			<div class="user-logo">
	  				<div class ="img"><?php echo "<img src=".$_SESSION['avatar'].">"?></div>
	  				<h3 class="Usuario"><?php unset($_SESSION['idConsulta']) ;echo $_SESSION['nombre'] . " " . $_SESSION['apellido']?></h3>
	  			</div>
	  		</div>
        <ul class="list-unstyled components mb-5">
          <li>
            <a href="menuAlumno"><span class="fa fa-home mr-3"></span> Menu</a>
          </li>
          <li>
              <a href="modificarAlumno"><span class="fa fa-pencil mr-3"></span> Modificar Perfil</a>
          </li>
          <li>
            <a href="eliminarAlumno"><span class="fa fa-ban mr-3""></span> Eliminar Perfil</a>
          </li>
          <li>
            <a href="salir"><span class="fa fa-sign-out mr-3"></span> Salir</a>
          </li>
        </ul>

    	</nav>

        <!-- Page Content  -->
     <div id="content" class="p-4 p-md-5 pt-5">
    <form class="formulario" method="post" action="ingresarGrupoAlumno">
        <div class="container">
            
            <h2 style="margin-top:4%;" class="titulo2">Grupos Disponibles</h2>
            <div style="width:300px; margin-top:5%;">
            <select class="custom-select md-form" name='id'>
              <option value="" disabled selected>Seleccionar Grupo</option>
              <?php
                foreach ($parametros['grupos'] as $filas) {
                $id = $filas['id'];
                $nombre = $filas['nombre'];
                echo "<option style='color: black;' value='$id'>$nombre</option>";
                }
                ?>
            </select>
          </div>
          <input class="botonAceptar" style="margin-left:32%; margin-top:20%;" type="submit" value="Solicitar Ingreso">
    </form>

</div>
<script src="/static/JS/ingresarGrupo.js"></script>
</body>
</html>