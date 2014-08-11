<?php

class Usuario
{
    private $idusuario;
    private $nombre;
    private $apellido;
    private $password;
    private $email;
    
    
     function __construct($idusuario,$nombre,$apellido,$password,$email) {
       $this->idusuario = $idusuario;
       $this->nombre = $nombre;
       $this->apellido = $apellido;
       $this->Password = $password;
       $this->email = $email;
       
     }
    
     function setIdUsuario($idusuario){
       $this->idusuario = $idusuario;
     } 
     function getIdUsuario(){
       return $this->idusuario;
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
     function setPassword($password){
       $this->password = $password;
     } 
     function getPassword(){
       return $this->password;
     }
     function setEmail($email){
       $this->email = $email;
     } 
     function getEmail(){
       return $this->email;
     }
    
}

?> 

