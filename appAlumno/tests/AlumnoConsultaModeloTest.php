<?php
require 'app/AlumnoConsultaModelo.class.php';

class AlumnoConsultaModeloTest extends PHPUnit\Framework\TestCase{

public function testarEnviarMensajeCorrecto(){
    try{
        $consultaEnviar = new AlumnoConsultaModelo();
        $consultaEnviar -> titulo = 'test:)';
        $consultaEnviar -> consulta = 'Odaaaaaaaaaaaaaaaaaaa';
        $consultaEnviar -> idAlumno='40';
        $consultaEnviar -> idDocente = '45';
        $consultaEnviar -> fecha= date("F j, Y, g:i a");
        $consultaEnviar -> estadoAlumno = "enviado";
        $consultaEnviar -> estadoDocente = "no respondido";
        $consultaEnviar -> idGrupoDocente = '2';
        $consultaEnviar -> idGrupo ='4';
        $consultaEnviar -> enviarConsulta();
        $this->assertTrue(true);     
    }catch (Exception $p) {
        $this->assertTrue(false);
    }
    }

    public function testarEnviarMensajeIncorrecto(){
        try{
            $consultaEnviar = new AlumnoConsultaModelo();
            $consultaEnviar -> titulo = 'test:)';
            $consultaEnviar -> consulta = 'Odaaaaaaaaaaaaaaaaaaa';
            $consultaEnviar -> idDocente = '45';
            $consultaEnviar -> fecha= date("F j, Y, g:i a");
            $consultaEnviar -> estadoAlumno = "enviado";
            $consultaEnviar -> estadoDocente = "no respondido";
            $consultaEnviar -> idGrupoDocente = '2';
            $consultaEnviar -> idGrupo ='4';
            $consultaEnviar -> enviarConsulta();
            $this->assertTrue(false);     
        }catch (Exception $p) {
            $this->assertTrue(true);
        }
        }

}
    