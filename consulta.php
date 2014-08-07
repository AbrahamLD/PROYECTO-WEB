<?php
$server     = 'localhost'; //servidor
$username   = 'root'; //usuario de la base de datos
$password   = ''; //password del usuario de la base de datos
$database   = 'clasedemo'; //nombre de la base de datos
 
$conexion = new mysqli();
$conexion->connect($server, $username, $password, $database);
/*
 Las 2 lineas de arriba se pueden resumir en:
 $conexion = @new mysqli($server, $username, $password, $database);
 Recuerden que el @ adelante de las funciones significa que no generará error o warnings
 Tema: http://www.elcodigofuente.com/uso-del-arroba-funciones-php-585/
*/
if ($conexion->connect_error) //verificamos si hubo un error al conectar, recuerden que pusimos el @ para evitarlo
{
    die('Error de conexión: ' . $conexion->connect_error); //si hay un error termina la aplicación y mostramos el error
}
 
$sql="SELECT * FROM registro";
 
$result = $conexion->query($sql); //usamos la conexion para dar un resultado a la variable
 
if ($result->num_rows > 0) //si la variable tiene al menos 1 fila entonces seguimos con el codigo
{
    while ($row = $result->fetch_array()) 
    //MYSQLI_ASSOC= El arreglo como siempre, es decir [campo1]->valor, [campo2]->valor
    //MYSQLI_NUM= Como indice [0]-> Valor de campo 1, [0]->valor de campo2
    //MYSQLI_BOTH= por defecto, trae ambos, es decir que si la tabla es de 2 campos, tendremos una array de 4 posiciones
    // [0] -> Valor campo1, [campo1] -> Valor de campo1, [1] -> Valor de campo2, [campo2]-> Valor de Campo1
    {
        echo "<pre>";
        print_r($row); //imprimimos el contenido de array
        echo "</pre>";
        echo "------------";
    }
}
else
{
    echo "No hubo resultados";
}
$conexion->close(); //cerramos la conexión
?>