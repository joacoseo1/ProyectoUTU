<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modificar Perfil</title>
    <link rel="stylesheet" href="/static/css/modificar.css">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
		
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="/static/css/styleMenu.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script&display=swap" rel="stylesheet">
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
          <li class="active">
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
        
        <div id="content" class="p-4 p-md-5 pt-5">
        <?php if (isset($parametros['falla']) && $parametros['falla'] == true) : ?>
            <div>
                <h3 style="color: white"> Complete Los datos </h3>
            </div>
        <?php endif; ?>
        <?php if(isset($parametros['falla']) && $parametros['falla'] == false): ?>
        <div><h3> style="color: white"Al seleccionar cambio de password debe ingresar una contraseña</h3></div>
    <?php endif; ?>
        <h1 class="titulo">MODIFICAR</h1>

    <section>
        <form class="formulario" method="post" action="modificarAlumno" autocomplete="off">
            <fieldset>
                <legend>Debe llenar todos los datos</legend>
                <div class="contenedor-campos">
                    <div class="campo">
                        <label class="label">Nombre</label>
                        <input class="input-text" type="text" name="nombre" placeholder="Nombre" value= <?php echo $_SESSION['nombre']?>>
                    </div>

                    <div class="campo">
                        <label class="label">Apellido</label>
                        <input class="input-text" type="text" name="apellido"  placeholder="Apellido" value= <?php echo $_SESSION['apellido']?>>
                    </div>

                    <div class="campo">
                        <label class="label">Edad</label>
                        <input class="input-text" type="number" name="edad" placeholder="Edad" value= <?php echo $_SESSION['edad']?>>
                    </div>

                    <div class="campo">
                        <label class="label">Email</label>
                        <input class="input-text" type="email" name="email" placeholder="Email" value= <?php echo $_SESSION['correo']?>>
                    </div>

                    <div class="campo">
                        <label class="label" id="titPass">Contraseña</label>
                        <input class="input-text" type="password" id="password" name="password" placeholder="Contraseña">
                    </div>

                    <div class="campo">
                        <label class="label">No cambiar Password</label>
                        <input type = "radio" id="pass" name = "opcion" value = "noCambio">
                        <label class="label">Cambiar Password</label>
                        <input type = "radio" id="pass1234" name = "opcion" value = "cambio">
                    </div>


                </div>
                <div class="imagenes">
                        <img class="perfilElegido" data-avatar="/static/img/avatares/avatar.jpg" id="avatar" src="/static/img/avatares/avatar.jpg">
                        <img class="perfilElegido" data-avatar="/static/img/avatares/avatar1.jpg" id="avatar1" src="/static/img/avatares/avatar1.jpg">
                        <img class="perfilElegido" data-avatar="/static/img/avatares/avatar2.jpg" id="avatar2" src="/static/img/avatares/avatar2.jpg">
                        <img class="perfilElegido" data-avatar="/static/img/avatares/avatar3.jpg" id="avatar3" src="/static/img/avatares/avatar3.jpg">
                        <img class="perfilElegido" data-avatar="/static/img/avatares/avatar4.jpg" id="avatar4" src="/static/img/avatares/avatar4.jpg">
                        <img class="perfilElegido" data-avatar="/static/img/avatares/avatar5.jpg" id="avatar5" src="/static/img/avatares/avatar5.jpg">
                        <img class="perfilElegido" data-avatar="/static/img/avatares/avatar6.jpg" id="avatar6" src="/static/img/avatares/avatar6.jpg">
                        <img class="perfilElegido" data-avatar="/static/img/avatares/alumnoPre.jpg" id="docentePre" src="/static/img/avatares/alumnoPre.jpg">
                        <input id="avatarInput" name="avatar" type="hidden">
                    </div>
                    <div class="enviar">
                        <input class="botonConfirmar" type="submit" value="Confirmar cambios">

                    </div>
        </form>
    </section>
</div>

<script src="/static/JS/modificar.js"></script>
<script src="/static/JS/avatar.js"></script>
    
</body>


</html>