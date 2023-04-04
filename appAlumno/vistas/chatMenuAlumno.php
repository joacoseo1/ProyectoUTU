<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/static/css/menuChatDocente.css">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!------ Include the above in your HEAD tag ---------->

    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<link rel="stylesheet" href="/static/css/styleMenu.css"> 
    <title>Chat Menu</title>
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
      <div class="content_box">
	<div class="top_bar">
	    <ul class=" nav-tabs--vertical nav" role="navigation">
		<li class="nav-item">
			<a href="#sinResponder" class="nav-link active" data-toggle="tab" role="tab" aria-controls="sinResponder">Chats Solicitudes</a>
		</li>
		<li class="nav-item">
			<a  href="#Respondidas" class="nav-link" data-toggle="tab" role="tab" aria-controls="Respondidas">Chats Aceptados</a>
		</li>
    <li class="nav-item">
			<a  href="#noUnidos" class="nav-link" data-toggle="tab" role="tab" aria-controls="noUnidos">Chats Abiertos</a>
		</li>
	</ul>
	</div>
    <div class="top_bar ">
        	<div class="tab-content ">
		<div class="tab-pane fade show active" id="sinResponder" role="tabpanel">


<table class="table table-bordered">
    <thead>
      <tr>
        <th>Nombre</th>
        <th>Apellido</th>
        <th>Asignatura</th>
        <th>Aceptar</th>
      </tr>
    </thead>
    <tbody>
    <?php
              foreach ($parametros['nombresDeDocentes'] as $filas) {
                $idGrupoDocente = $filas['idGrupoDocente'];
                $nombre = $filas['nombre'];
                $apellido = $filas['apellido'];
                $idDocente = $filas['idDocente'];
                $asignatura = $filas['asignatura'];
            
               ?>
      <form class="formDocentes" action="/crearChatHost" method='post'>
      <tr>
        <td><?php echo $nombre;?></td>
        <td><?php echo $apellido;?></td>
        <td><?php echo $asignatura;?></td>
        <td><input class='botonAceptar' type='submit' value='Crear Chat'></td>
        <input type='hidden' name='profesor' value="<?php echo $idGrupoDocente;?>">
      </tr>
      </form>
      <?php
        }
    ?>
    </tbody>
  </table>
		</div>


		<div class="tab-pane fade" id="Respondidas" role="tabpanel">
		<table class="table table-bordered">
    <thead>
      <tr>
        <th>Nombre</th>
        <th>Apellido</th>
        <th>Asignatura</th>
        <th>Ingresar</th>
      </tr>
    </thead>
    <tbody>
    <?php
            foreach ($parametros['ChatsQueEsHosts'] as $filas) {
              $id = $filas['id'];
              $nombre = $filas['nombre'];
              $apellido = $filas['apellido'];
              $asignatura= $filas['asignatura'];
              $soli= $filas['soli'];
               ?>
        <form class="formDocentes" action="/chatHostEntrar" method='post'>
      <tr>
        <td><?php echo $nombre;?></td>
        <td><?php echo $apellido;?></td>
        <td><?php echo $asignatura;?></td>
        <td><input class='botonAceptar' type='submit' value='Ingresar'></td>
        <input type='hidden' name='idChat' value="<?php echo $id;?>">
      </tr>
      </form>
      <?php
        }
    ?>
    </tbody>
  </table>
		</div>

    <div class="tab-pane fade" id="noUnidos" role="tabpanel">
		<table class="table table-bordered">
    <thead>
      <tr>
        <th>Nombre</th>
        <th>Apellido</th>
        <th>Asignatura</th>
        <th>Ingresar</th>
      </tr>
    </thead>
    <tbody>
    <?php
            foreach ($parametros['ChatsQueEstanAbiertos'] as $filas) {
              $id = $filas['id'];
              $nombre = $filas['nombre'];
              $apellido = $filas['apellido'];
              $asignatura= $filas['asignatura'];
               ?>
        <form class="formDocentes" action="/chatAunNoUnidos" method='post'>
      <tr>
        <td><?php echo $nombre;?></td>
        <td><?php echo $apellido;?></td>
        <td><?php echo $asignatura;?></td>
        <td><input class='botonAceptar' type='submit' value='Ingresar'></td>
        <input type='hidden' name='idChat' value="<?php echo $id;?>">
      </tr>
      </form>
      <?php
        }
    ?>
    </tbody>
  </table>
		</div>

    </div>
</div>
    </body>
