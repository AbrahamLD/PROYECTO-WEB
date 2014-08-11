<?php
	include_once ("clubControlador.php");

	 $id=1;

	 $clubControlador = new clubControlador();

	 foreach ($clubControlador->mostrarClubes() as $c) {
	 	echo "<div>";
	 	echo $c->getIdClub() . " && " .$c->getNombreClub();
	 	echo "</div>";
	 }

?>