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
            $u -> cedula = "87654321";
            $u -> password ="1234";
            $u -> tipo = "admin";
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
            $u -> tipo = "admin";
            $u -> revisar();
            $this->assertTrue(false);
        }
        catch (Exception $e){
            $this->assertTrue(true);
        }
    }
      
    
}
