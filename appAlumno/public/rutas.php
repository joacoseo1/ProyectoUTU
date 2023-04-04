<?php
 require '../utils/autoloader.php';
 require '../routes/routes.class.php';


 Routes::Add("/","get","AlumnoControlador::controlarAlumno");
 Routes::Add("/inicio","get","AlumnoControlador::controlarAlumnoInicio");
 Routes::Add("/loginAlumno","get","AlumnoControlador::controlarAlumnoLogin");
 Routes::Add("/loginAlumno","post","UsuarioControlador::iniciarSesionUsuario");
 Routes::Add("/singupAlumno","get","AlumnoControlador::controlarAlumnoRegistrarse");
 Routes::Add("/insertarAlumno","post","UsuarioControlador::CrearNuevoUsuario");
 Routes::Add("/menuAlumno","get","AlumnoControlador::controlarAlumnoinicio","authMiddleware::EstaAutenticado");

 Routes::Add("/eliminarAlumno","get","AlumnoControlador::eliminarAlumno","authMiddleware::EstaAutenticado");
 Routes::Add("/eliminarAlumno","post","UsuarioControlador::EliminarUsuario");
 
 Routes::Add("/modificarAlumno","get","AlumnoControlador::modificarAlumno","authMiddleware::EstaAutenticado");
 Routes::Add("/modificarAlumno","post","UsuarioControlador::updateUsuario");

 Routes::Add("/ingresarGrupoAlumno","get","GrupoAlumnoControlador::listarGrupos","authMiddleware::EstaAutenticado");
 Routes::Add("/ingresarGrupoAlumno","post","GrupoAlumnoControlador::ingresarGrupoAlumno");

 Routes::Add("/gruposAlumno","get","GrupoAlumnoControlador::listarGruposAlumno","authMiddleware::EstaAutenticado");
 Routes::Add("/gruposAlumno","get","GrupoAlumnoControlador::listarGruposAlumno","authMiddleware::EstaAutenticado");
 Routes::Add("/GrupoSeleccionadoAlumno","get","GrupoAlumnoControlador::gruposSeleccionadoAlumno","authMiddleware::EstaAutenticado");

 Routes::Add("/consultaAlumno","post","AlumnoConsultaControlador::consulta");
 Routes::Add("/enviarConsulta","post","AlumnoConsultaControlador::consultaEnviar");

 Routes::Add("/verConsultasAlumno","post","AlumnoConsultaControlador::verConsultaEnviada");
 Routes::Add("/verConsultasRespondidas","post","AlumnoConsultaControlador::verConsultaRespondias");

 Routes::Add("/chatMenuAlumno","get","AlumnoChatControlador::cargarTodasLasOpcionesDeChat","authMiddleware::EstaAutenticado");
 Routes::Add("/crearChatHost","post","AlumnoChatControlador::crearChat");
 Routes::Add("/chatHostEntrar","post","AlumnoChatControlador::entrarChatHost");
 
 Routes::Add("/cargarMensajesDelChat","get","AlumnoChatControlador::cargaMensajesChat","authMiddleware::EstaAutenticado");
 Routes::Add("/conectados","get","AlumnoChatControlador::Conectados","authMiddleware::EstaAutenticado");
 Routes::Add("/mensajitooo","post","AlumnoChatControlador::epico");

 Routes::Add("/chatAunNoUnidos","post","AlumnoChatControlador::IngresarAUnChatYaCreado");
 Routes::Add("/chatHostEntrar","post","AlumnoChatControlador::entrarChatHost");
 Routes::Add("/ChatConsultas","post","AlumnoControlador::contolarAlumnoGrupoSeleccionado");
 Routes::Add("/killChat","get","AlumnoChatControlador::cerrarChat","authMiddleware::EstaAutenticado");
 Routes::Add("/salir","get","UsuarioControlador::Salir");
 Routes::Run();

