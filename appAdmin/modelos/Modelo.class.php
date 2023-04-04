<?php
require '../utils/autoloader.php';
   
    class Modelo{
        protected $ipDB;
        protected $usuarioDB;
        protected $passwordDB;
        protected $nombreDB;
        protected $puertoDB;
        protected $conexion;

        

        public function __construct(){
            $this -> inicializarConexion();
            $this -> conexion=new mysqli(
            $this -> ipDB,
            $this -> usuarioDB,
            $this -> passwordDB,
            $this -> nombreDB,
            $this -> puertoDB
            );
             
            if($this -> conexion -> connect_error){
                throw new Exception("No se pudo Conectar a la Base de Datos");
            }
            
        }

        protected function inicializarConexion(){

            $this -> ipDB = IP_BD;
            $this -> usuarioDB = USUARIO_BD;
            $this -> passwordDB = PASSWORD_BD;
            $this -> nombreDB = NOMBRE_BD;
            $this -> puertoDB = PUERTO_BD;
          

        

        }


        
    }