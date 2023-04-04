<?php
require 'app/ChatAlumnoModelo.class.php';

class ChatAlumnoModeloTest extends PHPUnit\Framework\TestCase{

public function testarEnviarMensaje(){
        try{
         $d = new ChatAlumnoModelo();
         $d -> idDocente= '1000';
         $d -> nombreAlumno= "Gustavito";
         $d -> mensaje = "ODAAAAAAA";
         $d -> idChat = '1000';
         $d -> enviarMensajeDocente();
            $this->assertTrue(true);
         }catch (Exception $p) {
            $this->assertTrue(false);
         }
    }

public function testarNoEnviarMensaje(){
        try{
         $d = new ChatAlumnoModelo();
         $d -> nombreAlumno= "Gustavito";
         $d -> mensaje = "ODAAAAAAA";
         $d -> idChat = '1000';
         $d -> enviarMensajeDocente();
            $this->assertTrue(false);
         }catch (Exception $p) {
            $this->assertTrue(true);
         }
    }

}