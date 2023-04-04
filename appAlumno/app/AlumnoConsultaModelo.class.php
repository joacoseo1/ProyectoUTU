<?php 
    require_once('Modelito.class.php');
    class AlumnoConsultaModelo extends Modelito {
        public function enviarConsulta(){
            $sql = "INSERT INTO consulta(idDocente,idAlumno,titulo,descripcion,fechaEnviado,estadoAlumno,estadoDocente,idGrupoDocente,idGrupo) VALUES (
                '{$this->idDocente}',
                '{$this->idAlumno}',
                '{$this->titulo}',
                '{$this->consulta}',
                '{$this->fecha}',
                '{$this->estadoAlumno}',
                '{$this->estadoDocente}',
                '{$this->idGrupoDocente}',
                '{$this->idGrupo}');";
           $seten=$this->conexion->query($sql);

           if ($seten) {
               return true;
               }else{
                   return false;  
               }
            if ($this->conexion->connect_error) {
                throw new Exception("Error al enviar consulta");
            }
        }
            
    }