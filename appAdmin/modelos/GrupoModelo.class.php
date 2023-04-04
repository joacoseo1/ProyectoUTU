<?php
    require '../utils/autoloader.php';

    class GrupoModelo extends Modelo{


        public function revisarNombreDelGrupo(){
          $sql = "SELECT * FROM grupos WHERE nombre ='{$this->nombreGrupo}';";
      
          $resultados = $this->conexion->query($sql);
            while ($row = $resultados->fetch_row()){ 
            return true;
            }
            self::ingresarGrupo();
            return false;
         }
        

         private function ingresarGrupo(){
            $sql = "INSERT INTO grupos (nombre) values ('{$this->nombreGrupo}');";
            $this ->conexion->query($sql);

         }

      
        public function crearArrayDeGrupos(){
                
            $sql = "SELECT * FROM grupos;";
            $filas = array();
                foreach($this -> conexion -> query($sql) -> fetch_all(MYSQLI_ASSOC) as $fila){
                    $g = new GrupoModelo();
                    $g -> id = $fila['id'];
                    $g -> nombre = $fila['nombre'];
                    array_push($filas,$g);
            
                }
        
        return $filas;
        }

        public function eliminarGrupo(){
            $sql= "DELETE FROM grupos WHERE id='{$this -> id}';";
            $this -> conexion->query($sql);
        }
       

    }