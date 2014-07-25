<?php

class Profesor{
  private $localhost = "localhost";    
    private $usuario = "root";
    private $password = "root";
    private $database = "Profesor"; 

public function conectar()
 {
  if(!isset($this->conexion)){
    $this->conexion = (mysql_connect($this->localhost, $this->usuario,$this->password)) or die(mysql_error() );
    mysql_select_db($this->database , $this->conexion) or die(mysql_error());      

  }
 }     

public function consulta($sql)
 {
    $muestra = mysql_query($sql,$this->conexion);
    if(!$resultado){
     echo 'MySQL Error: ' . mysql_error();
     exit;
    }
    return $muestra; 
 }
 }


$conn= mysql_connect("localhost", "root", "") or die (mysql_error());
mysql_select_db("prueba", $conn);
$sql = "select * from Profesor";
$result = mysql_query($sql, $conn) or die (mysql_error());

while($row = mysql_fetch_assoc($result)) {
  foreach ($row as $name => $value) {
    print "$name: $value <br /> \n";
    }

}




class Profesor { 

	private $nombre;
	private $apellido;
	private $email

	function __construct($nombre,$apellido,$email) { 

		$this->nombre = $nombre; 
		$this->apellido = $apellido; 
		$this->email = $email; 
	} 


	function setName($nombre){ 
		$this->nombre = $nombre; 
	} 
	function getName(){ 
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

}
?>
