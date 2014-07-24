<?php
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

} //connection to the database $dbhandle = mysql_connect("localhost", "root", "") or die("Unable to connect to MySQL"); echo "Connected to MySQL<br>"; //select a database to work with $selected = mysql_select_db("prueba",$dbhandle) or die("Could not select database"); echo "Connected to the database<br>"; //create Usuario object $usuarioAuxiliar = new Usuario($idU,$nombreU); mysql_query("INSERT INTO demo (iddemo, texto) VALUES({$usuarioAuxiliar -> getId()}, '{$usuarioAuxiliar -> getName()}') ") or die(mysql_error()); echo "Data Inserted!<br>"; //execute the SQL query and return records $result = mysql_query("SELECT iddemo, texto FROM demo"); //fetch tha data from the database while ($row = mysql_fetch_array($result)) { //echo "ID:".$row{'iddemo'}." Name:".$row{'texto'}."<br>"; //echo $usuarioAuxiliarConsulta ."<br>"; // echo "Id: ".$usuarioAuxiliarConsulta.getId()."<br>"; $usuarioAuxiliarConsulta = new Usuario($row{'iddemo'},$row{'texto'}); echo "ID: ".$usuarioAuxiliarConsulta -> getId()." "; echo "Nombre Usuario: ".$usuarioAuxiliarConsulta -> getName(); echo "<br>"; } //close the connection mysql_close($dbhandle); ?>
