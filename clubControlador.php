<?php

include('databaseControlador.php');
include('clubClase.php');

class ClubControlador extends DataBaseControlador
{
    
    function mostrarClubes() {
    $rows = self::$db->getRows("SELECT * FROM club");        
    $arrayClubes= array();
    
        foreach ($rows as $c){
          $clubAuxiliar = new Club($c{'idclub'},$c{'nombre'});
          array_push($arrayClubes, $clubAuxiliar);
        }
    return $arrayClubes;        
  }

}
?>