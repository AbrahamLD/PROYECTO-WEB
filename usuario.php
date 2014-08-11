<?php

class Usuario{

<<<<<<< HEAD
<<<<<<< HEAD
	private $idregistro;
=======
	private $idusuario;
>>>>>>> origin/master
=======
>>>>>>> parent of 7522e03... registro validado
	private $nombre;
	private $apellido;	
	private $email;
	private $contrasenia;

<<<<<<< HEAD
<<<<<<< HEAD
	function __construct($idregistro,$nombre,$apellido,$contrasenia,$email) { 
 		$this->idregistro = $idregistro;
=======
	function __construct($idusuario,$nombre,$apellido,$email,$contrasenia) { 
 		$this->idusuario = $idusuario;
>>>>>>> origin/master
=======
	function __construct($nombre,$apellido,$email,$contrasenia) { 
>>>>>>> parent of 7522e03... registro validado
 		$this->nombre = $nombre;
 		$this->apellido = $apellido; 
 		$this->email = $email; 
 		$this->contrasenia = $contrasenia; 
 	} 

<<<<<<< HEAD
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
=======
 	function getNombre(){
		return $this ->nombre;
>>>>>>> parent of 7522e03... registro validado
	}

	function setNombre($nuevoNombre){
		$this->nombre = $nuevoNombre;
	}

<<<<<<< HEAD
	function getApellido(){
<<<<<<< HEAD
		return $this->apellido;
=======
	function setEmail($email){
		$this->email = $email;
>>>>>>> origin/master
=======
		return $this ->apellido;
>>>>>>> parent of 7522e03... registro validado
	}

	function setApellido($nuevoApellido){
		$this->nombre = $nuevoApellido;
	}

<<<<<<< HEAD
	function getEmail(){
<<<<<<< HEAD
		return $this->email;
=======
	function setContrasenia($contrasenia){
		$this->contrasenia = $contrasenia;
>>>>>>> origin/master
=======
		return $this ->email;
>>>>>>> parent of 7522e03... registro validado
	}

	function setEmail($nuevoEmail){
		$this->email = $nuevoEmail;
	}

<<<<<<< HEAD
	function getContrasenia(){
		return $this ->contrasenia;
	}
=======
>>>>>>> origin/master

	function setContrasenia($nuevoContrasenia){
		$this->contrasenia = $nuevoContrasenia;
	}




}


?>
