<?php 
    require_once('Modelito.class.php');
    class DocenteChatModelo extends Modelito {



        public function enviarMensajeDocente(){
            
            $sql ="INSERT INTO mensajesChat(idChat,nombreUsuario,idUsuario,mensaje) VALUES (
                '{$this->idChat}',
                '{$this->nombreDocente}',
                '{$this->idDocente}',
                '{$this->mensaje}');";
            $seten=$this->conexion->query($sql);

            if ($seten) {
                return true;
                }else{
                    return false;  
                }
            }

            
        }