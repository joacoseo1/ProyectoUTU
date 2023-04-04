<?php 
    require_once('Modelito.class.php');
    class UsuarioModelo extends Modelito {
        public $nombre;
        public $password;
        public $autenticado;


        public function revisar(){
            $sql = "SELECT * FROM usuario WHERE cedula ='{$this->cedula}'";
    
            $resultadosCedula = $this->conexion->query($sql);
    
            while ($row = $resultadosCedula->fetch_row()) {
                return true;
            }
            return false;
        }

        private function hashearPassword($password){
        return password_hash($password, PASSWORD_DEFAULT);
    }

    private function compararPasswords($passwordHasheado){
        return password_verify($this->password, $passwordHasheado);
    }

        public function autenticar(){
      
            $this->prepararAutenticacion();
            $this->sentencia->execute();
            
            $resultado = $this->sentencia->get_result()->fetch_assoc();
    
                if ($this->sentencia->error) {
                throw new Exception("Error al obtener usuario");
                }
    
                if ($resultado) {
                $comparacion = $this->compararPasswords($resultado['password']);
                if ($comparacion) {
                    $this -> autenticado = true;
                    
                } else {
                    throw new Exception("Error al iniciar sesion");
                }
            } else {
                throw new Exception("Error al iniciar sesion");
            }
        }

        private function prepararAutenticacion(){
      
            $sql = "SELECT id,nombre,apellido,cedula,edad,email,password,avatar,tipo FROM usuario WHERE cedula = ? && tipo=?";
            $this->sentencia = $this->conexion->prepare($sql);
            $this->sentencia->bind_param("ss", $this->cedula, $this->tipo);
           
        }
        public function guardarUsuario(){


        $this->password = $this->hashearPassword($this->password);
        $sql = "INSERT INTO usuario(nombre,apellido,cedula,edad,email,password,avatar,tipo,conexion) VALUES (
                    '{$this->nombre}',
                    '{$this->apellido}',
                    '{$this->cedula}',
                    '{$this->edad}',
                    '{$this->email}',
                    '{$this->password}',
                    '{$this->avatar}',
                    '{$this->tipo}',
                    '{$this->estado}');";

        $seten=$this->conexion->query($sql);
        return true;

        if ($seten) {
            return true;
            }else{
                return false;  
            }

       }

     //eliminar
     //ya que no cuento con variables de sesion 
     //usare variabales comunes para simularlas
    public function autenticarParaEliminar(){
        $comparacion = $this->compararPasswords('$2y$10$F7zZHLEQ6UFbVY9hZY9KgeclpKr5xoqxlpIFbmsGStDvR0ql87oBW');
        
        if('66555222'==$this->cedula && $comparacion){
            return true;
        }else{
            throw new Exception("Fallo confirmacion de la Cedula ");
        }
    }


    public function eliminarUsuario(){
        $this -> prepararEliminarUsuario();
        $seten=$this -> sentencia -> execute();
        if ($seten) {
            return true;
            }else{
                return false;  
            }
        if($this -> sentencia -> error){
            throw new Exception("Hubo un problema al eliminar el Usuario: " . $this -> conexion -> error);
        }
    }


    private function prepararEliminarUsuario(){
        $sql = "DELETE FROM usuario WHERE cedula = ?";
        $this -> sentencia = $this -> conexion -> prepare($sql);
        $this -> sentencia -> bind_param("s",$this -> cedula);
    }
    }