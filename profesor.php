<?
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
