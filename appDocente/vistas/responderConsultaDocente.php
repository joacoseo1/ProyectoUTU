<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="/static/img/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="/static/xd/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="/static/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="/static/xd/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="/static/xd/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="/static/xd/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="/static/css/util2.css">
	<link rel="stylesheet" type="text/css" href="/static/css/main2.css">

    <title>Responder Consulta</title>
</head>
<body>
<div class="contact1">
<div class="container-contact1">
			<div class="contact1-pic js-tilt" data-tilt>
				<img src="/static/img/img-01.png" alt="IMG">
			</div>

			<form class="contact1-form validate-form" method="post" action="responderConsulta">
            <?php
            if(isset($_SESSION['idConsulta'])){
            foreach($parametros['consultas'] as $filas){
                ?>
				<span  id="txtRespuesta" class="contact1-form-title">
					Respuesta
				</span>

				<div class="wrap-input1 validate-input">
					<label id="txtTitulo">Titulo</label>
					<input class="input1" disabled="disabled" type="text" name="titulo" placeholder="<?php echo $filas['titulo']?>">
					<span class="shadow-input1"></span>
				</div>

				<div class="wrap-input1 validate-input">
					<label id="txtConsulta">Consulta</label>
					<input class="input1"  disabled="disabled" type="text" name="Descripcion" placeholder="<?php echo $filas['descripcion']?>">
					<span class="shadow-input1"></span>
				</div>

				<div class="wrap-input1 validate-input">
					<label id="txtFecha">Fecha de Enviado</label>
					<input class="input1"  disabled="disabled"  type="text" name="Fecha" placeholder="<?php echo $filas['fechaEnviado']?>">
					<span class="shadow-input1"></span>
				</div>

				<div class="wrap-input1 validate-input" data-validate = "Message is required" >
					<label id="txtRespuesta1" >Respuesta</label>
					<textarea id="txtRespuestaP" style="resize:none;" class="input1" name="respuesta" placeholder="Respuesta" required></textarea>
					<span class="shadow-input1"></span>
				</div>

				<div class="container-contact1-form-btn">
					<button type="submit" class="contact1-form-btn">
						<span id="txtEnviar">
							Enviar Respuesta
							<i class="fa fa-long-arrow-right" aria-hidden="true"></i>
						</span>
					</button>
				</div>
                <?php 
                }
}
    
    ?>
            <div class="text-center p-t-50">
						<a id="txtVolver" class="txt2" href="menuDocente">
							Volver al menu
							<i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
						</a>
					</div>
			</form>
		</div>
	</div>



	<script src="/static/js/languages/responderConsultaDocente.js"></script>
<!--===============================================================================================-->
	<script src="/static/xd/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="/static/xd/bootstrap/js/popper.js"></script>
	<script src="/static/xd/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="/static/xd/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="/static/xd/tilt/tilt.jquery.min.js"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>

<!--===============================================================================================-->
	<script src="/static/js/main2.js"></script>
</div>
</body>
</html>