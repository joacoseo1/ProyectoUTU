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
          <a id="menu" href="menuDocente"><span class="fa fa-home mr-3"></span> Menu</a>
          </li>
          <li>
              <a id="txtModificar" href="modificarDocente"><span class="fa fa-pencil mr-3"></span> Modificar Perfil</a>
          </li>
          <li>
            <a id="txtEliminar" href="eliminarDocente"><span class="fa fa-ban mr-3""></span> Eliminar Perfil</a>
          </li>
          <li>
            <a id="txtSalir" href="salir"><span class="fa fa-sign-out mr-3"></span> Salir</a>
          </li>
        </ul>

    	</nav>

        <!-- Page Content  -->
     <div id="content" class="p-4 p-md-5 pt-5">
    <form class="formulario" method="post" action="ingresarGrupoDocente">
        <div class="container">
            
            <h2 id="txtTitulo" class="titulo2">Grupos Disponibles</h2>
            <div style="width:300px;">
            <select class="custom-select md-form" name='id'>
              <option id="txtSelec" value="" disabled selected>Seleccionar Grupo</option>
              <?php
                foreach ($parametros['grupos'] as $filas) {
                $id = $filas['id'];
                $nombre = $filas['nombre'];
                echo "<option style='color: black;' value='$id'>$nombre</option>";
                }
                ?>
            </select>
          </div>
          <div style="width:300px;">
            <select class="custom-select md-form" name='idA' style="margin-bottom:40%;">
              <option id="txtSelec2" value="" disabled selected>Seleccionar Asignatura</option>
            <?php
               
               foreach ($parametros['asignaturas'] as $filas) {
               $idA = $filas['id'];
               $asignatura = $filas['asignatura'];
               echo "<option style='color: black;'value='$idA'>$asignatura</option>";
               }
               ?>
            </select>
          </div>
            <input id="btnSeleccionar" class="botonAceptar" type="submit" value="Aceptar">
        </div>
    </form>
     </div>
     <script src="/static/js/languages/ingresarGrupoDocente.js"></script>
     <script src="/static/JS/ingresarGrupo.js"></script>
</body>

                