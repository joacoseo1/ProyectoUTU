<!doctype html>
<html lang="en">
  <head>
  	<title>Chats y Consultas</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
		
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="/static/css/styleMenu.css">
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
        <h2 class="mb-4" style="color:black;">Chats y Consultas</h2>
        <a href="GrupoSeleccionadoAlumno"><img src="/static/img/group.png" style="margin-top:17.4%;
        margin-left:27%; border: 4px solid black; padding:2%; box-shadow: 0px 5px 25px rgba(0,0,0,1);" alt=""></a>
      </div>
      <div id="content" class="p-4 p-md-5 pt-5">
      <h2 class="mb-4" style="color:#fff; visibility:hidden;">Menu</h2>
        <a href="chatMenuAlumno"><img src="/static/img/chatImg.png" style="margin-top:17.4%;
        margin-left:10%; border: 4px solid black; padding:2%; box-shadow: 0px 5px 25px rgba(0,0,0,1);" alt=""></a>
      </div>
		</div>

    <script src="/static/js/jquery.min.js"></script>
    <script src="/static/js/popper.js"></script>
    <script src="/static/js/bootstrap.min.js"></script>
    <script src="/static/js/mainMenu.js"></script>
  </body>
</html>