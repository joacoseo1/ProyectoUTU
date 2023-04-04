<?php
require '../utils/autoloader.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="/static/css/chat.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

	<script type="text/javascript">
		function tiempoReal() {
			var tabla = $.ajax({
				url: 'cargarMensajesDelChat',
				dataType: 'text',
				async: false
			}).responseText;

			document.getElementById("miTabla").innerHTML = tabla;

		}
		setInterval(tiempoReal, 1000);
	</script>



	<script type="text/javascript">
		function tiempoReal() {
			var tabla = $.ajax({
				url: 'conectados',
				dataType: 'text',
				async: false
			}).responseText;

			document.getElementById("conectados").innerHTML = tabla;

		}
		setInterval(tiempoReal, 1000);
	</script>

	<title>CHATs</title>
</head>

<body>

<div class="contenedor-btn">
	<a id="btnAtras" href="menuDocente">Atras</a>
</div>

<div id="contenedor">
		<div id="contenedor-usuario">
			<section id="conectados">

			</section>
		</div>

		<div id="mensajes">

			<div>
				<section id="miTabla">

				</section>
			</div>


			<form id="form">
				<input type="text" id="mensaje" name="mensaje"value="">
				<button id="btnEnviar" name="btnEnviar">Enviar</button>
			</form>

		</div>
	</div>
	<script src="/static/js/languages/chatDocente.js"></script>
</body>
</html>

<script type="text/javascript">
	$(document).ready(function() {
		$('#btnEnviar').click(function() {

			let men=document.querySelector('#mensaje').value;
		if(!men==""){
			$.ajax({

				type: "POST",
				url: "mensajitooo",
				dataType: 'json',
				data: {
					mensaje: $('#mensaje').val()
				},
				async: false


			});

			document.getElementById("mensaje").value = "";
			
		}
		return false;
		});
	});

</script>