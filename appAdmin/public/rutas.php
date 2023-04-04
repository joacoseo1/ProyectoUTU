<?php  
    require '../utils/autoloader.php';
    require '../routes/routes.class.php';

    Routes::Add("/","get","AdminControlador::controlarUsuario");
    Routes::Add("/inicio","get","AdminControlador::controlarUsuarioInicio");
    Routes::Add("/loginAdmin","get","AdminControlador::controlarUsuarioLogin");
    Routes::Add("/loginAdmin","post","UsuarioControlador::iniciarSesionUsuario");
    Routes::Add("/menuAdmin","get","AdminControlador::controlarUsuario","authMiddleware::EstaAutenticado");
    /*Grupo*/
    Routes::Add("/administrarGrupos","get","GrupoControlador::administrarGrupos","authMiddleware::EstaAutenticado");
   
    Routes::Add("/altaGrupo","get","GrupoControlador::controlarAdminParaAltaGrupo","authMiddleware::EstaAutenticado");
    Routes::Add("/altaGrupo","post","GrupoControlador::altaGrupo");

    Routes::Add("/bajaGrupo","get","GrupoControlador::listarGruposUsuario","authMiddleware::EstaAutenticado");
    Routes::Add("/bajaGrupo","post","GrupoControlador::bajaGrupo");
    /*Asignatura*/

    Routes::Add("/administrarAsignaturas","get","AsignaturaControlador::administrarAsignaturas","authMiddleware::EstaAutenticado");

    Routes::Add("/altaAsignatura","get","AsignaturaControlador::controlarAdminParaAltaAsignatura","authMiddleware::EstaAutenticado");
    Routes::Add("/altaAsignatura","post","AsignaturaControlador::altaAsignatura");
    
    Routes::Add("/bajaAsignatura","get","AsignaturaControlador::listarAsignatura","authMiddleware::EstaAutenticado");
    Routes::Add("/bajaAsignatura","post","AsignaturaControlador::bajaAsignatura");

    /*Solicitudes de Grupos*/
    Routes::Add("/administrarSolicitudes","get","AdminControlador::administrarSolicitudes","authMiddleware::EstaAutenticado");

    Routes::Add("/listarDeSolicitudes","get","AdminControlador::listarSolicitudes","authMiddleware::EstaAutenticado");
    Routes::Add("/listarDeSolicitudes","post","AdminControlador::eleccionDeSolicitud");

    Routes::Add("/busquedaFocalizada","get","AdminControlador::busquedaFocalizada","authMiddleware::EstaAutenticado");
    Routes::Add("/busquedaFocalizada","post","AdminControlador::solicitudesFocalizadas");

    Routes::Add("/opcionFocalizada","post","AdminControlador::opcionFocalizada");
    /*Registrar usuarios*/
    Routes::Add("/registrarUsuario","get","AdminControlador::registrarUsuario","authMiddleware::EstaAutenticado");
    Routes::Add("/registrarUsuario","post","AdminControlador::CrearNuevoUsuario");
    
    /*eliminar usuarios*/
    Routes::Add("/administrarEliminar","get","AdminControlador::administrarEliminar","authMiddleware::EstaAutenticado");

    Routes::Add("/busquedaFocalizadaEliminar","get","AdminControlador::busquedaFocalizadaEliminar","authMiddleware::EstaAutenticado");
    Routes::Add("/busquedaFocalizadaEliminar","post","AdminControlador::eliminarUsuario");
    
    Routes::Add("/listaDeUsuariosParaEliminar","get","AdminControlador::listaDeUsuariosParaEliminar","authMiddleware::EstaAutenticado");

    Routes::Add("/eliminarUsuarioDesdeListado","post","AdminControlador::eliminarUsuarioDesdeListado");
    
    /*Modificar usuarios*/
    Routes::Add("/administrarModificacionDeUsuario","get","AdminControlador::administrarModificacionDeUsuario","authMiddleware::EstaAutenticado");
    Routes::Add("/listarParaModificar","get","AdminControlador::listarParaModificar","authMiddleware::EstaAutenticado");
    Routes::Add("/listarParaModificar","post","AdminControlador::modificarUsuario");
    Routes::Add("/modificar","post","AdminControlador::modificar");

    Routes::Add("/busquedaFocalizadaModificar","get","AdminControlador::busquedaFocalizadaModificar","authMiddleware::EstaAutenticado");
    Routes::Add("/busquedaFocalizadaModificar","post","AdminControlador::buscarUsuarioParaModificar");



    Routes::Add("/salir","get","UsuarioControlador::Salir");
    Routes::Run();




    /*Modificar Usuario*/
/*
Routes::Add("/login","post","UsuarioControlador::iniciarSesionUsuario");
    Routes::Add("/menu","get","UsuarioControlador::MostrarMenuPrincipal","AuthMiddleware::EstaAutenticado");
    Routes::Add("/souvenires","get","UsuarioControlador::souveniresListado","AuthMiddleware::EstaAutenticado");
    Routes::Add("/comprar","post","UsuarioControlador::comprarProductos");

    Routes::Add("/registrarse","get","UsuarioControlador::controlarUsuarioRegistro");
    Routes::Add("/insertarCliente","post","UsuarioControlador::CrearNuevoCliente");

    Routes::Add("/menuAdmin","get","UsuarioControlador::controlarMenuAdmin");
    Routes::Add("/listar","get","productoControlador::listar");

    Routes::Add("/listarCompras","get","productoControlador::listarCompras");


    Routes::Add("/loginAdmin","get","UsuarioControlador::controlarAdminLogin");
    Routes::Add("/loginAdmin","post","UsuarioControlador::iniciarSesionAdmin");

    Routes::Add("/altaProducto","get","productoControlador::cargarVistaAltaProducto");
    Routes::Add("/insertarSuvenir","post","productoControlador::altaSuvenir");

    Routes::Add("/bajaProducto","get","productoControlador::cargarVistaBajaProducto");
    Routes::Add("/eliminarSouvenir","post","productoControlador::eliminarSuvenir");


    Routes::Add("/modificarProducto","get","productoControlador::cargarVistaModificarProducto");
    Routes::Add("/seleccionarParaEditar","post","productoControlador::modificarSuvenir");
    Routes::Add("/modificacionConfirmada","post","productoControlador::modificacionConfirmada");

    Routes::Add("/salir","get","UsuarioControlador::Salir");
    Routes::AddView("/publico","publico","AuthMiddleware::EstaAutenticadoView");



  require '../utils/autoloader.php';
$request = $_SERVER['REQUEST_URI'];


switch ($request) {

    

        case '/':
            cargarVista("inicio");
            break;
    
        case '/inicio':
            cargarVista("inicio");
            break;
    
        case '/login':
            if ($_SERVER['REQUEST_METHOD'] === 'GET') UsuarioControlador::MostrarLoginUsuario();
            if ($_SERVER['REQUEST_METHOD'] === 'POST') UsuarioControlador::iniciarSesionUsuario($_POST['cedula'], $_POST['password']);
            break;
    
        case '/menu':
            if(!isset($_SESSION['id'])){
                cargarVista('404');
            }else{
            cargarVista("menu");
            }
            break;
    
        case '/productos':
            if($_SESSION['autenticado']==true){
                if ($_SERVER['REQUEST_METHOD'] === 'GET') UsuarioControlador::productos();
                break;
            }else{
                cargarVista("inicio");
                }
            break;
           
    
    
        case '/comprar':
            if($_SESSION['autenticado']==true){
                if ($_SERVER['REQUEST_METHOD'] === 'POST') UsuarioControlador::comprarProductos($_POST['cantidad'], $_POST['idProducto'],$_POST['stockProducto']);
            break;
            }else{
                cargarVista("inicio");
                }
            break;
            
    
    












    case '/carga':
        cargarVista("menuAdmin");
        break;

    case '/menuAdmin':
        cargarVista("menuAdmin");
        break;

    case '/listar':
        if ($_SERVER['REQUEST_METHOD'] === 'GET') UsuarioControlador::listar();
        break;

    case '/altaProducto':
        cargarVista("altaProducto");
        break;

    case '/insertarSuvenir':
        if ($_SERVER['REQUEST_METHOD'] === 'POST') UsuarioControlador::altaSuvenir($_POST['nombre'], $_POST['descripcion'],$_POST['stock'],$_POST['precio']);
        break;

    case '/bajaProducto':
        if ($_SERVER['REQUEST_METHOD'] === 'GET') UsuarioControlador::listarProductoParaBaja();
        break;

    case '/eliminarSouvenir':
        if ($_SERVER['REQUEST_METHOD'] === 'POST') UsuarioControlador::eliminarSuvenir($_POST['idSouvenir']);
        break;

    case '/modificarProducto':
        if ($_SERVER['REQUEST_METHOD'] === 'GET') UsuarioControlador::listarProductoParaModificar();
        break;
        
    case '/seleccionarParaEditar':
        if ($_SERVER['REQUEST_METHOD'] === 'POST') UsuarioControlador::modificarSuvenir($_POST['idSouvenir']);
        break;

    case '/modificar':
        cargarVista("modificar");
        break;

    case '/modificacionConfirmada':
        if ($_SERVER['REQUEST_METHOD'] === 'POST') UsuarioControlador::modificacionConfirmada($_POST['nombre'], $_POST['descripcion'],$_POST['stock'],$_POST['precio']);
        break;

    case '/salir':
        if ($_SERVER['REQUEST_METHOD'] === 'GET') UsuarioControlador::Salir();
        break;

    default:
        cargarVista('404');
        break;

}
*/