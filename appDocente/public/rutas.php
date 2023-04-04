<?php
 require '../utils/autoloader.php';
 require '../routes/routes.class.php';

 Routes::Add("/xd","get","DocenteControlador::xd");
 Routes::Add("/","get","DocenteControlador::controlarDocente");
 Routes::Add("/inicio","get","DocenteControlador::controlarDocenteInicio");
 Routes::Add("/loginDocente","get","DocenteControlador::controlarDocenteLogin");
 Routes::Add("/loginDocente","post","UsuarioControlador::iniciarSesionUsuario");
 Routes::Add("/singupDocente","get","DocenteControlador::controlarDocenteRegistrarse");
 Routes::Add("/insertarDocente","post","UsuarioControlador::CrearNuevoUsuario");
 Routes::Add("/menuDocente","get","DocenteControlador::controlarDocenteinicio","authMiddleware::EstaAutenticado");
 Routes::Add("/eliminarDocente","get","DocenteControlador::eliminarDocente","authMiddleware::EstaAutenticado");
 Routes::Add("/eliminarDocente","post","UsuarioControlador::EliminarUsuario");
 
 Routes::Add("/modificarDocente","get","DocenteControlador::modificarDocente","authMiddleware::EstaAutenticado");
 Routes::Add("/modificarDocente","post","UsuarioControlador::updateUsuario");

 Routes::Add("/ingresarGrupoDocente","get","GrupoDocenteControlador::listarGrupos","authMiddleware::EstaAutenticado");
 Routes::Add("/ingresarGrupoDocente","post","GrupoDocenteControlador::ingresarGrupoDocente");

 Routes::Add("/gruposDocente","get","GrupoDocenteControlador::listarGruposDocente","authMiddleware::EstaAutenticado");
 Routes::Add("/GrupoSeleccionadoDocente","get","GrupoDocenteControlador::gruposSeleccionadoDocente","authMiddleware::EstaAutenticado");

 Routes::Add("/responderConsultaDocente","post","DocenteConsultaControlador::consulta");
 Routes::Add("/responderConsulta","post","DocenteConsultaControlador::mandarRespuesta");

 Routes::Add("/consultasRespondidasDocente","post","DocenteConsultaControlador::consultaYaRespondidas");

 Routes::Add("/chatMenuDocente","get","DocenteChatControlador::cargarTodasLasOpcionesDeChatDocente","authMiddleware::EstaAutenticado");
 Routes::Add("/aceptarSolicitudDeChat","post","DocenteChatControlador::AceptarChat");
 Routes::Add("/cargarMensajesDelChat","get","DocenteChatControlador::cargaMensajesChat","authMiddleware::EstaAutenticado");
 Routes::Add("/conectados","get","DocenteChatControlador::Conectados","authMiddleware::EstaAutenticado");
 Routes::Add("/mensajitooo","post","DocenteChatControlador::mensajitooo");
 Routes::Add("/ingresarAChat","post","DocenteChatControlador::entrarAChat");
 Routes::Add("/ChatConsultas","post","DocenteControlador::contolarDocenteGrupoSeleccionado");

 Routes::Add("/salir","get","UsuarioControlador::Salir");
 Routes::Run();

