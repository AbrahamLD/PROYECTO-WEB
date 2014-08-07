<?php

include('databaseControlador.php');
include('comedoresClase.php');

class ComedorControlador extends DataBaseControlador
{

	function mostrarComedores() {
		$rows = self::$db->getRows("SELECT * FROM comedor");        
    	$arrayComedor= array();
    
        foreach ($rows as $c){
          $comedorAuxiliar = new Comedor($c{'idComedor'},$c{'descripcion'});
          array_push($arrayComedor, $comedorAuxiliar);
        }
   		return $arrayComedor;       
	}






}	

?>