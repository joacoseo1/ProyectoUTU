<?php
require '../utils/autoloader.php';

class UsuarioControlador{

    public static function iniciarSesionUsuario($request){
        
        if($request['post']['tipo']==="docente"){
            $ir="Docente";
        }else
            if($request['post']['tipo']==="alumno"){
                $ir="Alumno";
            }else
                if($request['post']['tipo']==="admin"){
                    $ir="Admin";
                }

        if($request['post']['cedula'] !== "" || $request['post']['password'] !== ""){
            try{
                $u = new UsuarioModelo();
                $u -> cedula = $request['post']['cedula'];
                $u -> password = $request['post']['password'];
                $u -> tipo = $request['post']['tipo'];
                $u -> autenticar();
                $u -> conexion();
                self::crearSesion($u);
                return generarHtml('menu'.$ir,['exito',true]);
            }
            catch (Exception $u){
                echo '<script>alert("Cedula Y/O Contraseña incorrectas");</script>';
                error_log("Fallo login de la cedula ");
                generarHtml("login".$ir, ["falla" => true]);
            }
        }else{
            echo '<script>alert("Complete los datos");</script>';
            generarHtml("login".$ir, ["falla" => false]);
        }
      
    }




    private static function crearSesion($usuario){
        session_start();
        ob_start();
        $_SESSION['id'] = $usuario -> id;
        $_SESSION['nombre'] = $usuario -> nombre;
        $_SESSION['apellido'] = $usuario -> apellido;
        $_SESSION['cedula'] = $usuario -> cedula;
        $_SESSION['correo'] = $usuario -> email;
        $_SESSION['password'] = $usuario -> password;
        $_SESSION['edad'] = $usuario -> edad;
        $_SESSION['avatar'] = $usuario -> avatar;
        $_SESSION['tipo'] = $usuario -> tipo;
        if($_SESSION['tipo']=="alumno"){
              $_SESSION['autenticadoAlumno'] = true;
        }
        if($_SESSION['tipo']=="docente"){
            $_SESSION['autenticadoDocente'] = true;
            $_SESSION['idDocenteConsulta']==='no';
        }
        if($_SESSION['tipo']=="admin"){
            $_SESSION['autenticado'] = true;
      }
        
      

    }



    public static function EliminarUsuario($id, $cedula, $password){
        if($_SESSION['tipo']=="docente"){
            $ir="Docente";
        }
        if($_SESSION['tipo']=="alumno"){
            $ir="Alumno";
        }
        if ($cedula !== "" && $password !== "") {
            try {
                $u = new UsuarioModelo();
                $u->id->$id;
                $u->cedula = $cedula;
                $u->password = $password;
                $u->tipo = $_SESSION['tipo'];
                $u->autenticarParaEliminar();
                $u->eliminarUsuario();
                session_destroy();
                return generarHtml('inicio', ['exito', true]);
            } catch (Exception $p) {

                error_log("Fallo confirmacion de la Cedula ");
                generarHtml("eliminar".$ir, ["falla" => true]);
            }
        } else {
            generarHtml("eliminar".$ir, ["falla" => false]);
        }
    }

    //update

    public static function updateUsuario($nombre, $apellido, $edad, $email, $password, $avatar){
        // al instanciar se conecta inmediatamente a la BD, hace la conexion
        if($_SESSION['tipo']=="docente"){
            $ir="Docente";
        }
        if($_SESSION['tipo']=="alumno"){
            $ir="Alumno";
        }
        if ($nombre !== "" && $apellido !== "" && $edad !== "" && $email !== "" && $password !== "" && $avatar !== "") {
            try {
                $d = new UsuarioModelo();
                $d->id = $_SESSION['id'];
                $d->nombre = $nombre;
                $d->apellido = $apellido;
                $d->edad = $edad;
                $d->email = $email;
                $d->password = $password;
                $d->avatar = $avatar;
                $d->prepararUpdate();
                $d->killUsuario();
            } catch (Exception $p) {

            error_log($p->getMessage());
        }
    }
        generarHtml("modificar".$ir,["falla" => true]);
    }



    public static function salir(){
        try{
                
            $u = new UsuarioModelo();
            $u -> cedula = $_SESSION['cedula'];
            $u-> salir();

        }
        catch (Exception $u){
            error_log("Error Al Salir");
           
        }
    }




}