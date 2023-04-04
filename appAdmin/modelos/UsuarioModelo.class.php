<?php
require '../utils/autoloader.php';

class UsuarioModelo extends Modelo{

    public $nombre;
    public $apellido;
    public $cedula;
    public $edad;
    public $email;
    public $password;
    public $asignatura;
    public $avatar;


    public function valid(){
        
        if ($this -> nombre === "usuario1" && $this -> password === "1234")
        return true;

    else 
        throw new Exception("Auth failed");  
     
    }

    public function revisar()
    {
        $sql = "SELECT * FROM usuario WHERE cedula ='{$this->cedula}'";
        $resultadosCedula = $this->conexion->query($sql);

        while ($row = $resultadosCedula->fetch_row()) {
            $cedulavalor = true;
            return true;
        }


        return false;
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


        $this->conexion->query($sql);


        $sql1 = "SELECT id FROM usuario WHERE cedula ='{$this->cedula}'";


        $this->conexion->query($sql1);

        $filas = array();

        foreach ($this->conexion->query($sql1)->fetch_all(MYSQLI_ASSOC) as $fila) {
            $u = new UsuarioModelo();
            $u->id = $fila['id'];
            $e = $fila['id'];
            array_push($filas, $u);
        }

        if($this->tipo=="docente"){
            $sql2 = "INSERT INTO docente (id,cedula) VALUES (
                '{$e}',
                '{$this->cedula}');";
            $this->conexion->query($sql2);

        }
        
        if($this->tipo=="alumno"){
            $sql2 = "INSERT INTO alumno (id,cedula) VALUES (
                '{$e}',
                '{$this->cedula}');";
            $this->conexion->query($sql2);

        }
     

      

        if ($this->conexion->connect_error) {
            throw new Exception("Error al cargar el Usuario");
        }
    }


    private function hashearPassword($password)
    {
        return password_hash($password, PASSWORD_DEFAULT);
    }

    private function compararPasswords($passwordHasheado)
    {
        return password_verify($this->password, $passwordHasheado);
    }


    private function prepararAutenticacion(){
       
        $sql = "SELECT id,nombre,apellido,cedula,edad,email,password,avatar,tipo FROM usuario WHERE cedula = ? && tipo=?";
        $this->sentencia = $this->conexion->prepare($sql);
        $this->sentencia->bind_param("ss", $this->cedula, $this->tipo);
    }


    private function asignarDatosUsuario($resultado){
        $this->id = $resultado['id'];
        $this->nombre = $resultado['nombre'];
        $this->apellido = $resultado['apellido'];
        $this->cedula = $resultado['cedula'];
        $this->edad = $resultado['edad'];
        $this->email = $resultado['email'];
        $this->password = $resultado['password'];
        $this->edad = $resultado['edad'];
        $this->avatar = $resultado['avatar'];
        $this->tipo = $resultado['tipo'];
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
                $this->asignarDatosUsuario($resultado);
            } else {
                throw new Exception("Error al iniciar sesion");
            }
        } else {
            throw new Exception("Error al iniciar sesion");
        }
    }

        
    public function conexion(){
        $stmt="UPDATE usuario set 
                conexion='conectado'
                where id='{$this->id}';";
                $this->sentencia = $this->conexion->prepare($stmt);
                $this->sentencia -> execute();
    }

    public function salir(){
        $stmt="UPDATE usuario set 
                conexion='desconectado'
                where cedula='{$this->cedula}';";
                
                $this->sentencia = $this->conexion->prepare($stmt);
                $this->sentencia -> execute();
                session_destroy();

                header("location: inicio");
    }

    //Eliminar
    public function autenticarParaEliminar(){
        $comparacion = $this->compararPasswords($_SESSION['password']);
        
      
        if($_SESSION['cedula']==$this->cedula && $comparacion){
           ;
        }else{
            throw new Exception("Fallo confirmacion de la Cedula ");
        }
    }
    

    

    public function eliminarUsuario(){
        $this -> prepararEliminarUsuario();
        $this -> sentencia -> execute();

        if($this -> sentencia -> error){
            throw new Exception("Hubo un problema al eliminar el Usuario: " . $this -> conexion -> error);
        }
    }


    private function prepararEliminarUsuario(){
        $sql = "DELETE FROM usuario WHERE id = ?";
        $this -> sentencia = $this -> conexion -> prepare($sql);
        $this -> sentencia -> bind_param("i", $_SESSION['id']);
    }

    //update

    public function prepararUpdate(){
    $passwordHash = $this->hashearPassword($this->password);
        
       $stmt = "UPDATE usuario set 
                nombre='{$this->nombre}',
                apellido='{$this->apellido}',
                edad='{$this->edad}',
                email='{$this->email}',
                password='{$passwordHash}',
                avatar='{$this->avatar}'
                where id='{$this->id}';";
                
                $this->sentencia = $this->conexion->prepare($stmt);
                $this->sentencia -> execute();
        
        
    }


    public function killUsuario(){
        session_destroy();

        header("location: /inicio");
    }

}
