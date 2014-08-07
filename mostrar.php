<?php
include_once("UsuarioControlador.php");

$id =1;

$UsuarioControladorObj = new UsuarioControlador();

foreach ($UsuarioControladorObj->mostrarusuario() as $c){
  echo "<div>";
  echo $c->getIdUsuario() . "  && " .$c->getNombre() . "  && " .$c->getApellido() . "  && " .$c->getEmail() . "  && " .$c->getContrasenia();                                     
  echo "</div>"; 
}


?>
