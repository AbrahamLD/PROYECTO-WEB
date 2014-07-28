<?php

class Facultad
{
    private $idMateria;
    private $nombreMateria;
    
     function __construct($idMateria,$nombreMateria) {
       $this->idMateria = $idMateria;
       $this->$nombreMateria = $nombreMateria;
     }
     
     function setIdMateria($idMateria){
       $this->idMateria = $idMateria;
     } 
     function getIdMateria(){
       return $this->idMateria;
     } 
      function setNombreMateria($nombreMateria){
       $this->nombreMateria = $nombreMateria;
     } 
     function getNombreMateria(){
       return $this->nombreMateria;
     } 
    
}



?> 



