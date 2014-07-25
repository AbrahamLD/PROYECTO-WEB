<?php

class materias{
    private $localhost = "localhost";    
    private $usuario = "root";
    private $password = "";
    private $database = "clasedemo"; 

public function conectar()
 {
  if(!isset($this->conexion)){
    $this->conexion = (mysql_connect($this->localhost, $this->usuario,$this->password)) or die(mysql_error() );
    mysql_select_db($this->database , $this->conexion) or die(mysql_error());      

  }
 }     

public function consulta($sql)
 {
    $resultado = mysql_query($sql,$this->conexion);
    if(!$resultado){
     echo 'MySQL Error: ' . mysql_error();
     exit;
    }
    return $resultado; 
 }
 }

?>