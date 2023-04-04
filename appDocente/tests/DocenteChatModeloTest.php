<?php
require 'app/DocenteChatModelo.class.php';

class DocenteChatModeloTest extends PHPUnit\Framework\TestCase{

public function testarEnviarMensajeCorrectos(){
        try{
         $d = new DocenteChatModelo();
         $d -> idDocente= '1000';
         $d -> nombreDocente= "Espi";
         $d -> mensaje = "ODAAAAAAA";
         $d -> idChat = '1000';
         $d -> enviarMensajeDocente();
            $this->assertTrue(true);
         }catch (Exception $p) {
            $this->assertTrue(false);
         }
    }

public function testarEnviarMensajeIncorrectos(){
        try{
         $d = new DocenteChatModelo();
         $d -> nombreDocente= "Espi";
         $d -> mensaje = "ODAAAAAAA";
         $d -> idChat = '1000';
         $d -> enviarMensajeDocente();
            $this->assertTrue(false);
         }catch (Exception $p) {
            $this->assertTrue(true);
         }
    }

}