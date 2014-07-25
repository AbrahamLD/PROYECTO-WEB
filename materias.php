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
/*

$conn= mysql_connect("localhost", "root", "") or die (mysql_error());
mysql_select_db("clasedemo", $conn);
$sql = "select * from materias";
$result = mysql_query($sql, $conn) or die (mysql_error());

while($row = mysql_fetch_assoc($result)) {
  foreach ($row as $name => $value) {
    print "$name: $value <br /> \n";
    }

}

    
  class materias{

  	private $codigo;
  	private $descripcion;
  }

  function __construct ($codigo , $descripcion) {
  	$this->codigo =$codigo;
  	$this->descripcion =$descripcion;

  } 

  function getCodigo(){
  	  return $this ->codigo;
  }

  function setCodigo($newCodigo){
  	   $this->codigo =$newCodigo;
  }

  function getDescripcion(){
  	  return $this ->descripcion;
  }

  function setDescripcion($newDescripcion){
  	   $this->descripcion =$newDescripcion;
  }
*/
?>