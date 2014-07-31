<?
class Profesor { 

	private $idProfesor
	private $nombre;
	private $apellido;
	private $email

	function __construct($idProfesor,$nombre,$apellido,$email) { 
		
		$this->nombre = $idProfesor; 
		$this->nombre = $nombre;
		$this->apellido = $apellido; 
		$this->email = $email; 
	} 

	function setName($idProfesor){ 
		$this->nombre = $idProfesor; 
	} 
	function getName(){ 
		return $this->idProfesor; 
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
