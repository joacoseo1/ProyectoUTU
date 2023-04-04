<?php 
    require_once('Modelito.class.php');
    
    class GrupoModelo extends Modelito {

        public function revisarNombreDelGrupo(){
            $sql = "SELECT * FROM grupos WHERE nombre ='{$this->nombreGrupo}';";
        
            $resultados = $this->conexion->query($sql);
              while ($row = $resultados->fetch_row()){ 
              return true;
              }
               return false;
           }
          
  
           public function ingresarGrupo(){
              $sql = "INSERT INTO grupos (nombre) values ('{$this->nombreGrupo}');";
              $seten=$this->conexion->query($sql);

              if ($seten) {
                  return true;
                  }else{
                      return false;  
                  }
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
              $sql= "DELETE FROM grupos WHERE nombre='{$this -> nombre}';";
              $seten=$this->conexion->query($sql);

              if ($seten) {
                  return true;
                  }else{
                      return false;  
                  }
              }
          
         
    }