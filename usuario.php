<?php

class usuario{

<<<<<<< HEAD
	private $idregistro;
=======
	private $idusuario;
>>>>>>> origin/master
	private $nombre;
	private $apellido;	
	private $email;
	private $contrasenia;

<<<<<<< HEAD
	function __construct($idregistro,$nombre,$apellido,$contrasenia,$email) { 
 		$this->idregistro = $idregistro;
=======
	function __construct($idusuario,$nombre,$apellido,$email,$contrasenia) { 
 		$this->idusuario = $idusuario;
>>>>>>> origin/master
 		$this->nombre = $nombre;
 		$this->apellido = $apellido;
 		$this->contrasenia = $contrasenia;
 		$this->email = $email;
 	} 

<<<<<<< HEAD
 	function setIdregistro($idregistro){
		$this->idregistro = $idregistro;
	}
	
	function getIdregistro(){
		return $this->idregistro;
=======
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
>>>>>>> origin/master
	}

 	function setNombre($nombre){
		$this->nombre = $nombre;
	}

<<<<<<< HEAD
	function getNombre(){
		return $this->nombre;
=======
	function setApellido($apellido){
		$this->apellido = $apellido;
>>>>>>> origin/master
	}

	function setApellido($apellido){
		$this->apellido = $apellido;
	}

<<<<<<< HEAD
	function getApellido(){
		return $this->apellido;
=======
	function setEmail($email){
		$this->email = $email;
>>>>>>> origin/master
	}

	function setEmail($email){
		$this->email = $email;
	}

<<<<<<< HEAD
	function getEmail(){
		return $this->email;
=======
	function setContrasenia($contrasenia){
		$this->contrasenia = $contrasenia;
>>>>>>> origin/master
	}

	function setContrasenia($contrasenia){
		$this->contrasenia = $contrasenia;
	}

<<<<<<< HEAD
	function getContrasenia(){
		return $this->contrasenia;
	}
=======
>>>>>>> origin/master

}


?>
