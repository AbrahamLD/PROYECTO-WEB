<?php
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$apodo = $_POST['apodo'];
$password = $_POST['password'];
$confirmpassword = $_POST['confirmpassword'];
$email = $_POST['email'];

{
	$conn= mysql_connect("localhost", "root", "") or die (mysql_error());
	mysql_select_db("clasedemo", $conn);
	$verificaEmail = mysql_query("SELECT * FROM registro WHERE email = '$email'"); 
	  if ($password != $confirmpassword) {
			echo'<script type="text/javascript">
            alert("No coincide las contrase�a");
            window.location="http://localhost/registrarse/creaciondeusuarioalterna.html"
            </script>';
		if (mysql_num_rows ($verificaEmail) > 0 ){
				echo'<script type="text/javascript">
				alert("Error al registrar! - Correo Duplicado - Ingresa otro");
				window.location="http://localhost/registrarse/creaciondeusuarioalterna.html"
				</script>';
		}
	  }	
      else
      { 
		mysql_query("INSERT INTO registro (nombre,apellido,apodo,password,email) VALUES ('$nombre','$apellido','$apodo',sha1(md5('$password')),'$email')",$conn ); 
			echo'<script type="text/javascript">
                alert("El Registro se ha completado con exito");
                window.location="http://localhost/registrarse/creaciondeusuarioalterna.html"
                </script>';
	  }
}


?>