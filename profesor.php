<?
class Profesor { 

	private $idProfesores
	private $nombre;
	private $apellido;
	private $email

	function __construct($idProfesores,$nombre,$apellido,$email) { 
		
		$this->nombre = $idProfesores; 
		$this->nombre = $nombre; 
		$this->apellido = $apellido; 
		$this->email = $email; 
	} 

	function setName($idProfesores){ 
		$this->nombre = $idProfesores; 
	} 
	function getName(){ 
		return $this->idProfesores; 
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
