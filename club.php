<?php

class club{
	private $localhost = "localhost";    
    private $usuario = "root";
    private $password = "heris321";
    private $database = "club"; 
	
	function __construct($localhost,$usuario,$password,$database) { 
 		$this->localhost =$localhost;
 		$this->usuario = $usuario;  		
 		$this->password = $password;
 		$this->database = $$database;
 	} 

 	function getLocalhost(){
		return $this ->localhost;
	}

	function setLocalhost($nuevoLocalhost){
		$this->localhost = $nuevoLocalhost;
	}

	function getUsuario(){
		return $this ->usuario;
	}

	function setUsuario($nuevoUsuario){
		$this->usuario = $nuevoUsuario;
	}

 	function getPassword(){
		return $this ->password;
	}

	function setPassword($nuevoPassword){
		$this->password = $nuevoPassword;
	}

	function getDatabase(){
		return $this ->database;
	}

	function setDatabase($nuevoDatabase){
		$this->database = $nuevoDatabase;
	}

	public function conectar(){
		if(!isset($this->conexion)){
			$this->conexion = (mysql_connect($this->localhost, $this->usuario,$this->password)) or die(mysql_error() );
			mysql_select_db($this->database , $this->conexion) or die(mysql_error());      
		}
	}     

	public function consulta($sql){
		$resultado = mysql_query($sql,$this->conexion);
		if(!$resultado){
			echo 'MySQL Error: ' . mysql_error();
			exit;
		}
			return $resultado; 
	}

	$conn= mysql_connect("localhost", "root", "") or die (mysql_error());
	mysql_select_db("proyecto", $conn);
	$sql = "select * from club";
	$result = mysql_query($sql, $conn) or die (mysql_error());
	
	while($row = mysql_fetch_assoc($result)) {
		foreach ($row as $name => $value) {
		print "$name: $value <br /> \n";
		}

}

?>