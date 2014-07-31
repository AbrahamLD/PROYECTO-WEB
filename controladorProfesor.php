<?php

include('dataBase.php');
include('profesor.php');

class ControladorProfesor
{
    
    function conexion() {
         
         
    }
    
    function mostrarProfesores() {
        $db = new database('localhost', 'root', 'root');
        $db->connectdb();
        $db->selectDatabase('prueba');
        
        $result = $db->query("SELECT * FROM Profesor");
        
        $arrayProfesores = array();
        
        while ($row = mysql_fetch_array($result)) {
            
            $ProfesorAuxiliarConsulta = new Profesor($row{'idProfesor'},$row{'nombre'},$row{'apellido'},$row{'email'});
            array_push($arrayProfesores, $ProfesorAuxiliarConsulta);
         }

         $db->disconnectdb();
        return $arrayProfesores;
        
    }
}

?>
