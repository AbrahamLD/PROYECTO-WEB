<?php
<<<<<<< HEAD
<<<<<<< HEAD
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
 <title>Check Login</title>
 <meta charset = "utf8" />
</head>

<body>

<?php

	$conn= mysql_connect("localhost", "root", "") or die (mysql_error());
	mysql_select_db("clasedemo", $conn);
	$nombre = $_POST['username'];
	$password = $_POST['password'];
	$sql= "SELECT * FROM registro WHERE nombre = '$nombre' and password= sha1(md5('$password'))";
	$result = mysql_query($sql);
	$count = mysql_num_rows($result);
	  if ($count == 1) {
			$_SESSION['loggedin'] = true;
            $_SESSION['username'] = $nombre;
            $_SESSION['start'] = time();
            $_SESSION['expire'] = $_SESSION['start'] + (5 * 60);
			echo "<br> Bienvenido! " . $_SESSION['username'];

=======
=======
>>>>>>> origin/master

include('databaseControlador.php');
include('facultadClase.php');

session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
 <title>Check Login</title>
 <meta charset = "utf8" />
</head>

<body>

<?php

	
	$nombre = $_POST['username'];
	$password = $_POST['password'];
	$sql= "SELECT * FROM registro WHERE nombre = '$nombre' and password= sha1(md5('$password'))";
	$result = mysql_query($sql);
	$count = mysql_num_rows($result);
	  if ($count == 1) {
			$_SESSION['loggedin'] = true;
            $_SESSION['username'] = $nombre;
            $_SESSION['start'] = time();
            $_SESSION['expire'] = $_SESSION['start'] + (5 * 60);
			echo "<br> Bienvenido! " . $_SESSION['username'];

<<<<<<< HEAD
>>>>>>> origin/master
=======
>>>>>>> origin/master
	  }	
      else {
		echo "<br/>Username o Password estan incorrectos.<br>";
		echo "<a href='login.html'>Volver a Intentarlo</a>";
	  }


?>

</body>
<<<<<<< HEAD
<<<<<<< HEAD
</html>
=======
</html>
>>>>>>> origin/master
=======
</html>
>>>>>>> origin/master
