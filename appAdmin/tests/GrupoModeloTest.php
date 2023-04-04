<?php
require 'app/GrupoModelo.class.php';

class GrupoModeloTest extends PHPUnit\Framework\TestCase{

    public function testVerificarNombregrupoYaExiste(){
        try{
            $g=new GrupoModelo();
            $g -> nombreGrupo = '3BA';
            $g->revisarNombreDelGrupo();
            $this->assertTrue(true);
        }catch(Exception $e){
            $this->assertTrue(false);
            error_log($e->getMessage());
        }
    }

    public function testVerificarNombregrupoNoExiste(){
        try{
            $g=new GrupoModelo();
            $g -> nombreGrupo = '2PK';
            $g->revisarNombreDelGrupo();
            $this->assertFalse(false);
        }catch(Exception $e){
            $this->assertTrue(false);
            error_log($e->getMessage());
        }
    }

    public function testIngresarGrupoCorrecto(){
        try{
            $g=new GrupoModelo();
            $g -> nombreGrupo = '2PK';
            $g->ingresarGrupo();
            $this->assertTrue(true);
        }catch(Exception $e){
            $this->assertTrue(false);
            error_log($e->getMessage());
        }
    }
    public function testIngresarGrupoincorrecto(){
        try{
            $g=new GrupoModelo();
            $g->ingresarGrupo();
            $this->assertFalse(true);
        }catch(Exception $e){
            $this->assertTrue(true);
            error_log($e->getMessage());
        }
    }

    public function testEliminarGrupoCorrecto(){
        try{
            $g=new GrupoModelo();
            $g -> nombre='2PK';
            $g->eliminarGrupo();
            $this->assertTrue(true);
        }catch(Exception $e){
            $this->assertTrue(true);
            error_log($e->getMessage());
        }
    }

    public function testEliminarGrupoincorrecto(){
        try{
            $g=new GrupoModelo();
            $g->eliminarGrupo();
            $this->assertFalse(true);
        }catch(Exception $e){
            $this->assertTrue(true);
            error_log($e->getMessage());
        }
    }



}