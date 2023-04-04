
<?php
require '../utils/autoloader.php';
class GrupoControlador{
    public static function administrarGrupos(){
        return generarHtml('administrarGrupos', ['']);
    }

    public static function controlarAdminParaAltaGrupo(){
            return generarHtml('altaGrupo', ['']);
    }

    public static function altaGrupo($request){
       
        if(!$request['post']['grupoNombre'] == ""){
            try{
                $g=new GrupoModelo();
                $g -> nombreGrupo = $request['post']['grupoNombre'];
                $resultado=$g->revisarNombreDelGrupo();
                if($resultado){
                 generarHtml("altaGrupo", ["falla" => true]);
                 echo '<script>alert("Error, ya ingresado")</script>';
                }else{
                    echo '<script>alert("Se creo correctamente")</script>';
                    generarHtml("altaGrupo", ["falla" => false]);
                }
               
                

            }catch(Exception $e){
                error_log($e->getMessage());
            }
        }else{
            echo '<script>alert("Debe seleccionar uno")</script>';
            generarHtml("altaGrupo", ["falla2" => true]);   
        }

   
    }

    public static function listarGruposUsuario(){
        $g= new GrupoModelo();
        $grupos = array();
        foreach($g -> crearArrayDeGrupos() as $fila){
            $grupo= array(
                "id" => $fila -> id,
                "nombre" => $fila -> nombre
            );
            array_push($grupos,$grupo);
        }
       
        return generarHtml('bajaGrupo',['grupos'=> $grupos]);
    }


    public static function bajaGrupo($request){
        if(!$request['post']['id']==""){
            try{
                $g=new GrupoModelo();
                $g-> id = $request['post']['id'];
                $g -> eliminarGrupo();
                echo '<script>alert("Se Elimino Correctamente")</script>';
                self::listarGruposUsuario();

            }catch(Exception $e){
                error_log($e->getMessage());
            }

        }else{
            echo '<script>alert("ERROR! debe seleccionar un grupo")</script>';
            self::listarGruposUsuario();
        }

    }
    
}