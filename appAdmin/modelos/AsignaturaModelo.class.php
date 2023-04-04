<?php
    require '../utils/autoloader.php';

    class AsignaturaModelo extends Modelo{


        public function revisarNombreDeLaAsignatura(){
          $sql = "SELECT * FROM asignaturas WHERE asignatura ='{$this->nombreAsignatura}';";
        
      
          $resultados = $this->conexion->query($sql);
            while ($row = $resultados->fetch_row()){ 
            return true;
            }
            self::ingresarAsignatura();
            return false;
         }
        

         private function ingresarAsignatura(){
            $sql = "INSERT INTO asignaturas (asignatura) values ('{$this->nombreAsignatura}');";
            $this ->conexion->query($sql);

         }

      
        public function crearArrayDeAsignaturas(){
                
            $sql = "SELECT * FROM asignaturas;";
            $filas = array();
                foreach($this -> conexion -> query($sql) -> fetch_all(MYSQLI_ASSOC) as $fila){
                    $g = new GrupoModelo();
                    $g -> id = $fila['id'];
                    $g -> asignatura = $fila['asignatura'];
                    array_push($filas,$g);
            
                }
        
        return $filas;
        }

        public function eliminarAsignatura(){
            $sql= "DELETE FROM asignaturas WHERE id='{$this -> id}';";
            $this -> conexion->query($sql);
        }

        
    








    }