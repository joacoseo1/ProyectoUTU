<?php
    require '../utils/autoloader.php';

    class AdminModelo extends Modelo{


    public function crearArrayDeGrupos(){
                
            $sql = "SELECT * FROM grupoAlumno where solicitud=false;";
       
            $filas = array();
                foreach($this -> conexion -> query($sql) -> fetch_all(MYSQLI_ASSOC) as $fila){
                    $s = new AdminModelo();
                    $s -> id = $fila['id'];
                    $s -> idAlumno = $fila['idAlumno'];
                    $s -> idGrupo = $fila['idGrupo'];
                    $s -> cedula =$fila['cedula'];
                    $sql2 = "SELECT * FROM usuario where id='{$fila['idAlumno']}';";
                    foreach($this -> conexion -> query($sql2) -> fetch_all(MYSQLI_ASSOC) as $fila2){
                    $s->nombre=$fila2['nombre'];
                    $s ->apellido=$fila2['apellido'];
                    $fila['nombre']=$fila2['nombre'];
                    $fila['apellido']=$fila2['apellido'];
    
                    }
                   
                    $sql3="SELECT * FROM grupos where id='{$fila['idGrupo']}';";
                    foreach($this -> conexion -> query($sql3) -> fetch_all(MYSQLI_ASSOC) as $fila3){
                    $s->nombreGrupo=$fila3['nombre'];
                    $fila['nombreGrupo']=$fila3['nombre'];
                    }
                  
                    array_push($filas,$s);
            
                }
        
        return $filas;
        }



        public function aceptarSolicitud(){
            $sql = "UPDATE grupoAlumno set solicitud=true where id='{$this -> id}';";
            $this -> conexion -> query($sql);  
        }


        public function cancelarSolicitud(){
            $sql = "DELETE from grupoAlumno where id='{$this -> id}';";
            $this -> conexion -> query($sql);
        }

        public function buscar(){
            $validar=$this -> VerificarExistencia($this->cedula);
            if($validar){
                return true;
            }else{
                return false;
            }

        }

        private function VerificarExistencia($cedula){
            $sql = "SELECT * FROM grupoAlumno WHERE cedula='{$cedula}' && solicitud=false;";
           
            $resultadosValidacion = $this->conexion->query($sql);
            while ($row = $resultadosValidacion->fetch_row()) {
                return true;
            }
            return false;

        }

        public function crearArrayFocalizada(){
                
            $sql = "SELECT * FROM grupoAlumno where cedula= '{$this->cedula}' && solicitud=false;";
          
           
       
            $filas = array();
                foreach($this -> conexion -> query($sql) -> fetch_all(MYSQLI_ASSOC) as $fila){
                    $s = new AdminModelo();
                    $s -> id = $fila['id'];
                    $s -> idAlumno = $fila['idAlumno'];
                    $s -> idGrupo = $fila['idGrupo'];
                    $s -> cedula =$fila['cedula'];
                    $sql2 = "SELECT * FROM usuario where id='{$fila['idAlumno']}';";
                    
                    foreach($this -> conexion -> query($sql2) -> fetch_all(MYSQLI_ASSOC) as $fila2){
                    $s->nombre=$fila2['nombre'];
                    $s ->apellido=$fila2['apellido'];
                    $fila['nombre']=$fila2['nombre'];
                    $fila['apellido']=$fila2['apellido'];
                    }
        
                    $sql3="SELECT * FROM grupos where id='{$fila['idGrupo']}';";
                    foreach($this -> conexion -> query($sql3) -> fetch_all(MYSQLI_ASSOC) as $fila3){
                    $s->nombreGrupo=$fila3['nombre'];
                    $fila['nombreGrupo']=$fila3['nombre'];
                    }
                  
                    array_push($filas,$s);
            
                }

        
        return $filas;
        }
        

        public function verificarEliminado(){
            $sql = "SELECT * FROM usuario WHERE cedula='{$this -> cedula}';";
           

            $resultadosValidacion = $this->conexion->query($sql);
            while ($row = $resultadosValidacion->fetch_row()) {
                self::eliminarUsuario();
                return true;
            }
            return false;
        }

        private function eliminarUsuario(){
            $sql="DELETE FROM usuario where cedula='{$this -> cedula}';";
           
            $this -> conexion -> query($sql);
            return true;

        }


        public function crearArrayDeUsuarios(){
            $sql="SELECT * FROM usuario where tipo!='admin';";
            

            $filas = array();
                foreach($this -> conexion -> query($sql) -> fetch_all(MYSQLI_ASSOC) as $fila){
                    $s = new AdminModelo();
                    $s -> id = $fila['id'];
                    $s -> nombre = $fila['nombre'];
                    $s -> apellido = $fila['apellido'];
                    $s -> cedula =$fila['cedula'];
                    $s -> tipo =$fila['tipo'];
                    array_push($filas,$s);
                }
        
        return $filas;

        }

     public function buscarUsuario(){
        $sql="SELECT * FROM usuario where cedula='{$this -> cedula}';";
    
            

        $filas = array();
            foreach($this -> conexion -> query($sql) -> fetch_all(MYSQLI_ASSOC) as $fila){
                $s = new AdminModelo();
                $s -> id = $fila['id'];
                $s -> nombre = $fila['nombre'];
                $s -> apellido = $fila['apellido'];
                $s -> cedula =$fila['cedula'];
                $s -> edad =$fila['edad'];
                $s -> email =$fila['email'];
                array_push($filas,$s);
            }
    
    return $filas;
     }
     private function hashearPassword($password){
         return password_hash($password, PASSWORD_DEFAULT);
     }
     

     public function modificar(){
         if($this -> password=="no"){
            $sql="UPDATE usuario SET 
            nombre='{$this->nombre}',
            apellido='{$this->apellido}',
            edad='{$this->edad}',
            email='{$this->email}' WHERE id='{$this -> id}';";

         }else{
            $password=self::hashearPassword($this->password);

            $sql="UPDATE usuario SET 
            nombre='{$this->nombre}',
            apellido='{$this->apellido}',
            edad='{$this->edad}',
            email='{$this->email}',
            password='{$password}' WHERE id='{$this -> id}';";
            
            
         }
         $this -> conexion -> query($sql);
 

     }

     public function verificarParaModificar(){
        $sql = "SELECT * FROM usuario WHERE cedula='{$this -> cedula}';";
        $resultadosValidacion = $this->conexion->query($sql);
        while ($row = $resultadosValidacion->fetch_row()) {
            return true;
        }
        return false;
    }

    }