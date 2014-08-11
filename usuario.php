<?php

class usuario{

	private $idregistro;
	private $nombre;
	private $apellido;	
	private $email;
	private $contrasenia;

	function __construct($idregistro,$nombre,$apellido,$contrasenia,$email) { 
 		$this->idregistro = $idregistro;
 		$this->nombre = $nombre;
 		$this->apellido = $apellido;
 		$this->contrasenia = $contrasenia;
 		$this->email = $email;
 	} 

 	function setIdregistro($idregistro){
		$this->idregistro = $idregistro;
	}
	
	function getIdregistro(){
		return $this->idregistro;
	}

 	function setNombre($nombre){
		$this->nombre = $nombre;
	}

	function getNombre(){
		return $this->nombre;
	}

	function setApellido($apellido){
		$this->apellido = $apellido;
	}

	function getApellido(){
		return $this->apellido;
	}

	function setEmail($email){
		$this->email = $email;
	}

	function getEmail(){
		return $this->email;
	}

	function setContrasenia($contrasenia){
		$this->contrasenia = $contrasenia;
	}

	function getContrasenia(){
		return $this->contrasenia;
	}

}


?>
