<?php



include_once("comedoresControlador.php");
$comedor = new ComedorControlador();

foreach ($comedor->mostrarComedores() as $c){
  echo "<div>";  
  echo $c->getIdComedor() . "  && " .$c->getDescripcion();                                     
  echo "</div>"; 
}










?>