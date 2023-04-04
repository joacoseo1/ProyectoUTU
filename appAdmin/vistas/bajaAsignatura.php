<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eliminar Asignaturas</title>
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!------ Include the above in your HEAD tag ---------->

    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<link rel="stylesheet" href="/static/css/styleMenu.css">    
    <link rel="stylesheet" href="/static/css/grupoBaja.css">
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
      <div class="content_box">
    <div class="top_bar ">
        	<div class="tab-content ">
		<div class="tab-pane fade show active" role="tabpanel">

<h2>Eliminar Asignaturas</h2>
<table style="width:100px; border: 1px solid black" class="table table-bordered">
    <thead>
      <tr>
        <th style="font-size: 20px; text-align:center;">Asignatura</th>
        <th style="font-size: 20px; text-align:center;">Eliminar</th>
      </tr>
    </thead>
    <tbody>
    <?php
           foreach ($parametros['asignaturas'] as $filas) {
            $id = $filas['id'];
            $asignatura = $filas['asignatura'];
            
               ?>
      <form action="/bajaAsignatura" method='post'>
      <tr>
        <td class="nombreGrupo" ><?php echo $asignatura;?></td>
        <td><input class='botonAceptar' type='submit' value='Eliminar'></td>
        <input type='hidden' name='id' value="<?php echo $id;?>">
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