<?php
    class Modelito{
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

            $this -> ipDB = "192.168.17.147";
            $this -> usuarioDB = "usuario";
            $this -> passwordDB = "1234";
            $this -> nombreDB = "base";
            $this -> puertoDB = "3306";
          

        

        }


        
    }