<?php 
    require_once('Modelito.class.php');
    class GrupoAlumnoModelo extends Modelito {

        public function validarGrupo($idAlumno,$id){
            $sql = "SELECT * FROM grupoAlumno WHERE idAlumno='{$idAlumno}' && idGrupo = '{$id}';";
            
        
            $resultadosValidacion = $this->conexion->query($sql);
            
            while($row = $resultadosValidacion->fetch_row()) {
                
                return true;
            }
            return false;
        }
        
        public function guardarGrupoAlumno(){
            
                
                    $sql= "INSERT INTO grupoAlumno(idAlumno,cedula,idGrupo,solicitud) VALUES (
                        '{$this->idAlumno}',
                        '{$this->cedula}',
                        '{$this->id}',
                        false);";

                        $seten=$this->conexion->query($sql);

                        if ($seten) {
                            return true;
                            }else{
                                return false;  
                            }
                
                    }
            
    }