<?php

class Club
{
    private $idClub;
    private $nombreClub;
    
     function __construct($idClub,$nombreClub) {
       $this->idClub = $idClub;
       $this->nombreClub = $nombreClub;
     }
    
     function setIdClub($idClub){
       $this->idClub = $idClub;
     } 
     function getIdClub(){
       return $this->idClub;
     } 
      function setNombreClub($nombreClub){
       $this->nombreClub = $nombreClub;
     } 
     function getNombreClub(){
       return $this->nombreClub;
    }
}
?> 

