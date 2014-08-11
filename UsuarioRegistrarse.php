<?php

include('DataBaseControlador.php');
include('usuario.php');

class UsuarioRegistro extends DataBaseControlador
{
    
    function validarExistenciaUsuario($usuario) {
    $row = self::$db->insertRow("select * from registro where email='$email'");
    if($row->num_rows > 0) {
                echo'<script type="text/javascript">
                alert("Error al registrar! - Correo Duplicado - Ingresa otro");
                window.location="http://localhost/registrarse/creaciondeusuario.html"
                </script>';
    }
    else
    
        foreach ($rows as $c){
          $usuarioAuxiliar = new Usuario($c{'idusuario'},$c{'nombre'},$c{'apellido'},$c{'password'},$c{'email'});
          array_push($arrayUsuario, $UsuarioAuxiliar);
        }
        
        
        
    return $arrayUsuario;        
  }

}
?>
