<?php
require 'app/GrupoAlumnoModelo.class.php';

class GrupoAlumnoModeloTest extends PHPUnit\Framework\TestCase{


    public function testingresarGrupoAlumnoIncorrecta(){
        try{
         $p = new GrupoAlumnoModelo();
         $p -> cedula = '99999999';
         $p-> id = '4';
         $p->guardarGrupoAlumno();
            $this->assertTrue(false);
         }catch (Exception $p) {
            $this->assertTrue(true);
         }
    }

    
    public function testingresarGrupoAlumnoCorrecto(){
        try{
         $p = new GrupoAlumnoModelo();
         $p->idAlumno = '59';
         $p -> cedula = '99999999';
         $p-> id = '4';
         $p->guardarGrupoAlumno();
            $this->assertTrue(true);
         }catch (Exception $p) {
            $this->assertTrue(false);
         }
    }

 


}