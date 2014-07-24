<?php

class Usuario{

	private $nombre;
	private $apellido;	
	private $email;
	private $contrasenia;

	function __construct($nombre,$apellido,$correo,$contrasenia) { 
 		$this->nombre = $nombre;
 		$this->apellido = $apellido; 
 		$this->email = $email; 
 		$this->contrasenia = $contrasenia; 
 	} 

 	function getNombre(){
		return $this ->nombre;
	}

	function setNombre($nuevoNombre){
		$this->nombre = $nuevoNombre;
	}

	function getApellido(){
		return $this ->apellido;
	}

	function setApellido($nuevoApellido){
		$this->nombre = $nuevoApellido;
	}

	function getEmail(){
		return $this ->email;
	}

	function setEmail($nuevoEmail){
		$this->email = $nuevoEmail;
	}

	function getContrasenia(){
		return $this ->contrasenia;
	}

	function setContrasenia($nuevoContrasenia){
		$this->contrasenia = $nuevoContrasenia;
	}




}


?>
