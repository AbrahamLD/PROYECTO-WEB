<?php

class Usuario{

	private $idusuario;
	private $nombre;
	private $apellido;	
	private $email;
	private $contrasenia;

	function __construct($idusuario,$nombre,$apellido,$email,$contrasenia) { 
 		$this->idusuario = $idusuario;
 		$this->nombre = $nombre;
 		$this->apellido = $apellido; 
 		$this->email = $email; 
 		$this->contrasenia = $contrasenia; 
 	} 

 	function getIdusuario(){
		return $this ->idusuario;
	}

	function setIdusuario($idusuario){
		$this->idusuario = $idusuario;
	}

 	function getNombre(){
		return $this ->nombre;
	}

	function setNombre($nombre){
		$this->nombre = $nombre;
	}

	function getApellido(){
		return $this ->apellido;
	}

	function setApellido($apellido){
		$this->apellido = $apellido;
	}

	function getEmail(){
		return $this ->email;
	}

	function setEmail($email){
		$this->email = $email;
	}

	function getContrasenia(){
		return $this ->contrasenia;
	}

	function setContrasenia($contrasenia){
		$this->contrasenia = $contrasenia;
	}



}


?>
