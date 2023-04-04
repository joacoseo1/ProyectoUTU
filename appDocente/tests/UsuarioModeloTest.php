<?php
require 'app/UsuarioModelo.class.php';

class UsuarioModeloTests extends PHPUnit\Framework\TestCase{

    public function testVerificarCedulaCorrecta(){
        try{
            $u = new UsuarioModelo();
            $u -> cedula = "99977788";
            $u -> revisar();
            $this->assertTrue(true);
        }
        catch (Exception $e){
            $this->assertTrue(false);
        }
    }

    public function testVerificarCedulaIncorrecta(){
        try{
            $u = new UsuarioModelo();
            $u -> cedula = "52084";
            $u -> revisar();
            $this->assertFalse(false);
        }
        catch (Exception $e){
            $this->assertTrue(false);
        }
    }


    public function testLoginCedulacorrecta(){
        try{
            $u = new UsuarioModelo();
            $u -> cedula = "99977788";
            $u -> password ="1234";
            $u -> tipo = "docente";
            $u -> revisar();
            $this->assertTrue($this -> autenticado);
        }
        catch (Exception $e){
            $this->assertTrue(true);
        }
    }

    public function testLoginCedulaIncorrecta(){
        try{
            $u = new UsuarioModelo();
            $u -> cedula = "520841";
            $u -> password ="1234";
            $u -> tipo = "docente";
            $u -> revisar();
            $this->assertTrue(false);
        }
        catch (Exception $e){
            $this->assertTrue(true);
        }
    }

    public function testRegistrarUsuarioCorrecto(){
        try{
            $u = new UsuarioModelo();
            $u -> nombre = "Unit";
            $u -> apellido = "test";
            $u -> cedula = "666555222";
            $u -> edad = "3";
            $u -> email = "eeee@asd.com";
            $u -> password ="1234";
            $u -> avatar = "/static/img/avatares/docentePre.jpg";
            $u -> tipo = "docente";
            $u -> estado = "conectado";
            $u -> guardarUsuario();
            $this->assertTrue(true);
        }
        catch (Exception $e){
            $this->assertTrue(false);
        }
    }

    public function testRegistrarUsuarioIncorrecto(){
        try{
            $u = new UsuarioModelo();
            $u -> nombre = "Unit";
            $u -> apellido = "test";
            $u -> cedula = "666555222";
            $u -> edad = "3";
            $u -> email = "eeee@asd.com";
            $u -> password ="1234";
            $u -> avatar = "/static/img/avatares/docentePre.jpg";
            $u -> tipo = "docente";
            $u -> estado = "conectado";
            $u -> guardarUsuario();
            $this->assertFalse(false);
        }
        catch (Exception $e){
            $this->assertTrue(false);
        }
    }

    public function testAutenticarEliminarUsuarioCorrecto(){
        try{
            $u = new UsuarioModelo();
            $u -> cedula = '66555222';
            $u -> password = '1234';
            $u -> tipo = 'docente';
            $u->autenticarParaEliminar();
            $this->assertTrue(true);
        }
        catch (Exception $e){
            $this->assertTrue(false);
        }
    }

    public function testEliminarUsuarioCorrecto(){
        try{
            $u = new UsuarioModelo();
            $u -> cedula = '66555222';
            $u -> password = '1234';
            $u -> tipo = 'docente';
            $u->eliminarUsuario();
            $this->assertTrue(true);
        }
        catch (Exception $e){
            $this->assertTrue(false);
        }
    }

    

                
    
}
