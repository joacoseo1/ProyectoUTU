<?php
require '../utils/autoloader.php';
class AdminControlador{
 

    public static function controlarUsuario(){
        if(!isset($_SESSION['autenticado'])){
            return generarHtml('inicio', ['']);
        }else{
            return generarHtml('menuAdmin', ['']);
        }
    }


    public static function controlarUsuarioLogin(){
        if(!isset($_SESSION['autenticado'])){
            return generarHtml('loginAdmin', ['']);
        }else{
            return generarHtml('menuAdmin', ['']);
            
        }
    }

    public static function controlarUsuarioinicio(){
        if(!isset($_SESSION['autenticado'])){
            return generarHtml('inicio', ['']);
        }else{
            return generarHtml('menuAdmin', ['']);
            
        }
    }

    public static function controlarMenuUsuario(){
        return generarHtml('menuAdmin', ['']);
    }

    public static function administrarSolicitudes(){
        return generarHtml('administrarSolicitudes', ['']);
    }

   
    public static function listarSolicitudes(){
        $g= new AdminModelo();
        $grupos = array();
        foreach($g -> crearArrayDeGrupos() as $fila){
            $grupo= array(
                "id" => $fila -> id,
                "idAlumno" => $fila -> idAlumno,
                "nombre" => $fila -> nombre,
                "apellido" => $fila -> apellido,
                "cedula" => $fila ->cedula,
                "nombreGrupo" => $fila -> nombreGrupo
            );
            array_push($grupos,$grupo);
        }
       
        return generarHtml('listaDeSolicitudes',['grupos'=> $grupos]);
    }

    


    public static function eleccionDeSolicitud($request) {
        
        try{
            $s= new AdminModelo();
            $s-> id = $request['post']['id'];
            if($request['post']["boton"]=="Aceptar"){
            $s -> aceptarSolicitud();
            echo '<script>alert("Solicitud aceptar correctamente");</script>';
            self::listarSolicitudes();

            }
            if($request['post']["boton"]=="Eliminar"){
            $s -> cancelarSolicitud();
            echo '<script>alert("Solicitud declinada correctamente");</script>';
            self::listarSolicitudes();
            }

        }catch(Exception $e){
            error_log($e->getMessage());
        }

    }

    public static function busquedaFocalizada(){

        return generarHtml('solicitudesFocalizadas', ['']);

    }


    public static function solicitudesFocalizadas($request){
        
        if(!$request['post']['cedula']=="" && strlen($request['post']['cedula']) === 8 && is_numeric($request['post']['cedula'])){
            try{
                $s=new AdminModelo();
                $s -> cedula = $request['post']['cedula'];
                $validar=$s -> buscar();
                if($validar){
                    $solicitudes = array();
                    foreach($s -> crearArrayFocalizada() as $fila){
                    $solicitud= array(
                        "id" => $fila -> id,
                        "idAlumno" => $fila -> idAlumno,
                        "nombre" => $fila -> nombre,
                        "apellido" => $fila -> apellido,
                        "cedula" => $fila ->cedula,
                        "nombreGrupo" => $fila -> nombreGrupo
            );
            array_push($solicitudes,$solicitud);
           
        }
        return generarHtml('solicitudesFocalizadasAceptarODeclinar',['solicitudes'=> $solicitudes]);
       
                    
                }
                if(!$validar){
                    generarHtml("solicitudesFocalizadas", ["falla" => false]);
                }
            }catch(Exception $e){
                error_log($e->getMessage());
            }
        }else{
            generarHtml("solicitudesFocalizadas", ["falla" => true]);
        }

    }

    public static function opcionFocalizada($request) {
      
        try{
            $s= new AdminModelo();
            $s-> id = $request['post']['id'];
            if($request['post']["boton"]=="Aceptar"){
            $s -> aceptarSolicitud();
            echo '<script>alert("Solicitud aceptar correctamente");</script>';
            return generarHtml('menuAdmin',[]);

            }
            if($request['post']["boton"]=="Eliminar"){
            $s -> cancelarSolicitud();
            echo '<script>alert("Solicitud declinada correctamente");</script>';
            return generarHtml('menuAdmin',[]);
            }

        }catch(Exception $e){
            error_log($e->getMessage());
        }

    }

    public static function registrarUsuario(){
        return generarHtml('registrarUsuario',[]);
    }


    public static function CrearNuevoUsuario($request){
     
         if ($request['post']['nombre'] !== "" && $request['post']['apellido'] !== "" && $request['post']['cedula'] !== "" && $request['post']['edad'] !== "" && $request['post']['email'] !== "" && $request['post']['tipo'] !== "") {
             
             if(strlen($request['post']['cedula']) === 8 && is_numeric($request['post']['cedula'])){
                     try {
                      $avatar = "/static/img/avatares/docentePre.jpg";
                         $u = new UsuarioModelo();
                         $u->nombre = $request['post']['nombre'];
                         $u->apellido = $request['post']['apellido'];
                         $u->cedula = $request['post']['cedula'];
                         $u->edad = $request['post']['edad'];
                         $u->email = $request['post']['email'];
                         $u->password = $request['post']['password'];   
                         $u->tipo =$request['post']['tipo'];
                         $u->estado = "desconectado";
                         $resultado=$u->revisar();
 
                         if(!$resultado){
                             $u -> guardarUsuario();
                             echo '<script>alert("Creado correctamente")</script>';
                             return generarHtml('registrarUsuario',['exito' => true]);
                         }else{
                            echo '<script>alert("Error usuario, CI no valida");</script>';
                             return generarHtml('registrarUsuario', ['verificado' => true]);
                         }
     
                     }catch(Exception $e){
                         error_log($e -> getMessage());
                         return generarHtml('registrarUsuario', ['exito' => false]);
                     }
 
                 
 
             }else{
                echo '<script>alert("Cedula invalida");</script>';
                return generarHtml('registrarUsuario', ['cedula' => true]);  
             }
 
         }else{
                 return generarHtml('registrarUsuario', ['exito2' => true]);
         }
           
     }

     public static function administrarEliminar(){
        return generarHtml('administrarEliminar',[]);
     }


     public static function busquedaFocalizadaEliminar(){
        return generarHtml('busquedaFocalizadaEliminar',[]);
     }

     public static function eliminarUsuario($request){
       
       if($request['post']['cedula']!=="" && strlen($request['post']['cedula']) === 8 && is_numeric($request['post']['cedula'])){
        try{
            
            $u = new AdminModelo();
            $u -> cedula=$request['post']['cedula'];
            
            $resultado=$u -> verificarEliminado();
            if($resultado){
                echo '<script>alert("Eliminado Correctamente")</script>';
                return generarHtml('busquedaFocalizadaEliminar',['exito' => true]);
            }else{
                echo '<script>alert("No se pudo eliminar usuario")</script>';
                return generarHtml('busquedaFocalizadaEliminar',['exito' => false]);
            }
            

        }catch(Exception $e){
            error_log($e -> getMessage());
        }
       }else{
        return generarHtml('busquedaFocalizadaEliminar',['falla' => true]);
       }
        
     }

     public static function listaDeUsuariosParaEliminar(){
        $u= new AdminModelo();
        $usuarios = array();
        foreach($u -> crearArrayDeUsuarios() as $fila){
            $usuario= array(
                "id" => $fila -> id,
                "nombre" => $fila -> nombre,
                "apellido" => $fila -> apellido,
                "cedula" => $fila ->cedula,
                "tipo" => $fila -> tipo
            );
            array_push($usuarios,$usuario);
        }
       
        return generarHtml('listaDeUsuariosParaEliminar',['usuarios'=> $usuarios]);

     }

     public static function eliminarUsuarioDesdeListado($request){
       
        if($request['post']['cedula']!=="" && strlen($request['post']['cedula']) === 8 && is_numeric($request['post']['cedula'])){
         try{
             
             $u = new AdminModelo();
             $u -> cedula=$request['post']['cedula'];
             $resultado=$u -> verificarEliminado();
             if($resultado){
                echo '<script>alert("Se elimino correctamente");</script>';
                self::listaDeUsuariosParaEliminar();
             }else{
                echo '<script>alert("No se econtraron resultados");</script>';
                self::listaDeUsuariosParaEliminar();
             }
             
 
         }catch(Exception $e){
             error_log($e -> getMessage());
         }
        }else{
            echo '<script>alert("Cedula Invalida");</script>';
            self::listaDeUsuariosParaEliminar();
        }
         
      }


      public static function administrarModificacionDeUsuario(){
        return generarHtml('administrarModificacionDeUsuario',[]);
      }
     
   

      public static function listarParaModificar(){
        $u= new AdminModelo();
        $usuarios = array();
        foreach($u -> crearArrayDeUsuarios() as $fila){
            $usuario= array(
                "id" => $fila -> id,
                "nombre" => $fila -> nombre,
                "apellido" => $fila -> apellido,
                "cedula" => $fila ->cedula,
                "tipo" => $fila -> tipo
            );
            array_push($usuarios,$usuario);
        }
       
        return generarHtml('listaDeUsuariosParaModificar',['usuarios'=> $usuarios]);
      }


      public static function modificarUsuario($request){
        if(!$request['post']['cedula']==""){
            try{
                $u= new AdminModelo();
                $u -> cedula=$request['post']['cedula'];
                $usuarios=array();
                foreach($u -> buscarUsuario() as $fila){
                    $usuario= array(
                        "id" => $fila -> id,
                        "nombre" => $fila -> nombre,
                        "apellido" => $fila -> apellido,
                        "edad" => $fila -> edad,
                        "email" => $fila -> email
                    );
                    array_push($usuarios,$usuario);
                }
               
                return generarHtml('modificarUsuario',['usuarios'=> $usuarios]);

            }catch(Exception $e){
                error_log($e -> getMessage());
            }

    
        }else{
            self::listarParaModificar();
            echo '<script>alert("Debe seleccionar un usuario para modificar");</script>';
        }
      
     }

     public function modificar($request){
         
        if($request['post']['nombre'] !== "" && $request['post']['apellido'] !== "" &&  $request['post']['edad'] !== "" && $request['post']['email'] !== "" && !$request['post']['password'] == ""){
            try{
                $u= new AdminModelo();
                $u ->id=$request['post']['id'];
                $u->nombre = $request['post']['nombre'];
                $u->apellido = $request['post']['apellido'];
                $u->edad = $request['post']['edad'];
                $u->email = $request['post']['email'];
                $u->password = $request['post']['password'];
                $u -> modificar();
                echo '<script>alert("Modificacion completada correctamente");</script>';
                return generarHtml('administrarModificacionDeUsuario',[]);
            }catch(Exception $e){
                error_log($e -> getMessage());
            }
        }else{
            echo '<script>alert("ERROR, debe llenar los campos");</script>';
            return generarHtml('administrarModificacionDeUsuario',[]);
        }
     }



     public static function busquedaFocalizadaModificar(){
        return generarHtml('busquedaFocalizadaModificar',[]);
     }


     public static function buscarUsuarioParaModificar($request){
        if($request['post']['cedula']!=="" && strlen($request['post']['cedula']) === 8 && is_numeric($request['post']['cedula'])){
         try{
             
             $u = new AdminModelo();
             $u -> cedula=$request['post']['cedula'];
             
             $resultado=$u -> verificarParaModificar();
             if($resultado){
                echo '<script>alert("Usuario Encontrado);</script>';
                try{
                    $u= new AdminModelo();
                    $u -> cedula=$request['post']['cedula'];
                    $usuarios=array();
                    foreach($u -> buscarUsuario() as $fila){
                        $usuario= array(
                            "id" => $fila -> id,
                            "nombre" => $fila -> nombre,
                            "apellido" => $fila -> apellido,
                            "edad" => $fila -> edad,
                            "email" => $fila -> email
                        );
                        array_push($usuarios,$usuario);
                    }
                   
                    return generarHtml('modificarUsuario',['usuarios'=> $usuarios]);
    
                }catch(Exception $e){
                    error_log($e -> getMessage());
                }
             }else{
                 return generarHtml('busquedaFocalizadaModificar',['exito' => false]);
             }
             
 
         }catch(Exception $e){
             error_log($e -> getMessage());
         }
        }else{
         return generarHtml('busquedaFocalizadaModificar',['falla' => true]);
        }
         
      }

}