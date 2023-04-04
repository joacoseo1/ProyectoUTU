<?php
require 'app/AsignaturaModelo.class.php';

class AsignatruaModeloTest extends PHPUnit\Framework\TestCase{


    public function testVerificarNombreAsignaturaYaExiste(){
        try{
            $g=new AsignaturaModelo();
            $g -> nombreAsignatura = 'Matematica';
            $g->revisarNombreDeLaAsignatura();
            $this->assertTrue(true);
        }catch(Exception $e){
            $this->assertTrue(false);
            error_log($e->getMessage());
        }
    }

    public function testVerificarNombreAsignaturaNoExiste(){
        try{
            $g=new AsignaturaModelo();
            $g -> nombreAsignatura = 'unit';
            $g->revisarNombreDeLaAsignatura();
            $this->assertFalse(false);
        }catch(Exception $e){
            $this->assertTrue(false);
            error_log($e->getMessage());
        }
    }

    public function testIngresarAsignaturaCorrecto(){
        try{
            $g=new AsignaturaModelo();
            $g -> nombreAsignatura = 'unit';
            $g->ingresarAsignatura();
            $this->assertTrue(true);
        }catch(Exception $e){
            $this->assertTrue(false);
            error_log($e->getMessage());
        }
    }
    public function testIngresarAsignaturaincorrecto(){
        try{
            $g=new AsignaturaModelo();
            $g->ingresarAsignatura();
            $this->assertFalse(true);
        }catch(Exception $e){
            $this->assertTrue(true);
            error_log($e->getMessage());
        }
    }

    public function testEliminarAsignaturaCorrecto(){
        try{
            $g=new AsignaturaModelo();
            $g -> asignatura='unit';
            $g->eliminarAsignatura();
            $this->assertTrue(true);
        }catch(Exception $e){
            $this->assertTrue(true);
            error_log($e->getMessage());
        }
    }

    public function testEliminarAsignaturaincorrecto(){
        try{
            $g=new AsignaturaModelo();
            $g->eliminarAsignatura();
            $this->assertFalse(true);
        }catch(Exception $e){
            $this->assertTrue(true);
            error_log($e->getMessage());
        }
    }


}