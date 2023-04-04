<?php
require '../utils/autoloader.php';
    class AsignaturaControlador{
        public static function administrarAsignaturas(){
            return generarHtml('administrarAsignaturas', ['']);
        }

        public static function controlarAdminParaAltaAsignatura(){
            return generarHtml('altaAsignatura', ['']);
    }

        public static function altaAsignatura($request){
       
            if(!$request['post']['asignaturaNombre'] == ""){
                try{
                    $a=new AsignaturaModelo();
                    $a -> nombreAsignatura = $request['post']['asignaturaNombre'];
                    $resultado=$a->revisarNombreDeLaAsignatura();
                    if($resultado){
                        generarHtml("altaAsignatura", ["falla" => true]);
                        echo '<script>alert("ERROR! Ya existe")</script>';
                    }else{
                        echo '<script>alert("Correctamente")</script>';
                        generarHtml("altaAsignatura", ["falla" => false]);
                    }

                 }catch(Exception $e){
                    error_log($e->getMessage());
                 }
            }else{
                generarHtml("altaAsignatura", ["falla2" => true]);   
            }
   
        }

        public static function listarAsignatura(){
            $a= new AsignaturaModelo();
            $asignaturas = array();
            foreach($a -> crearArrayDeAsignaturas() as $fila){
                $asignatura= array(
                "id" => $fila -> id,
                "asignatura" => $fila -> asignatura
            );
            array_push($asignaturas,$asignatura);
            }
       
            return generarHtml('bajaAsignatura',['asignaturas'=> $asignaturas]);
        }


        public static function bajaAsignatura($request){
            
            if(!$request['post']['id'] == ""){
                try{
                    $a = new AsignaturaModelo();
                    $a -> id = $request['post']['id'];
                    $a -> eliminarAsignatura();
                    echo '<script>alert("Se Elimino Correctamente")</script>';
                    self::listarAsignatura();
                }catch(Exception $e){
                    error_log($e->getMessage());
                   
                }

            }else{
                echo '<script>alert("ERROR! debe seleccionar un grupo")</script>';
                self::listarAsignatura();
            }
        }




    }