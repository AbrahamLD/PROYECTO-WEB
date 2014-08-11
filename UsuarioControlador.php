<?php

include('DataBaseControlador.php');
include('usuario.php');

class UsuarioControlador extends DataBaseControlador
{
    
    function mostrarusuario() {
    $row = self::$db->getRow("SELECT * FROM registro");
    $arrayUsuario= array();  
    
        foreach ($rows as $c){
          $usuarioAuxiliar = new Usuario($c{'idregistro'},$c{'nombre'},$c{'apellido'},$c{'password'},$c{'email'});
          array_push($arrayUsuario, $usuarioAuxiliar);
        }
        
        
        
    return $arrayUsuario;        
  }

}
?>
