<?php
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$apodo = $_POST['apodo'];
$password = $_POST['password'];
$email = $_POST['email'];

 {
	$conn = new mysqli();
	@$conn->connect("localhost", "root", "", "clasedemo");
	if ($conn->connect_error) //verificamos si hubo un error al conectar, recuerden que pusimos el @ para evitarlo
	{
		die('Error de conexión: ' . $conn->connect_error);
	}
	
	$nuevo_correo = "select * from registro where email='$email'";
    $valida = $conn->query($nuevo_correo);
	if($valida->num_rows > 0)
        {
              echo'<script type="text/javascript">
                alert("Error al registrar! - Correo Duplicado - Ingresa otro");
                window.location="http://localhost/registrarse/creaciondeusuario.html"
                </script>';
        }
        else
        {
			$conn->query("INSERT INTO registro (nombre,apellido,apodo,password,email) VALUES ('$nombre','$apellido','$apodo','$password','$email')"); 
			echo "datos insertado";
		}	

}
?>