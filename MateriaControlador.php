<?php

include('dataBase.php');
include('Materia.php');

class MateriaControlador
{
    
    function conexion() {
         
         
    }
    
    function mostrarMaterias() {
        $db = new database('localhost', 'root', '');
        $db->connectdb();
        $db->selectDatabase('prueba');
        
        $result = $db->query("SELECT * FROM Materia");
        
        $arrayMaterias = array();
        
        while ($row = mysql_fetch_array($result)) {
            
            $MateriaAuxiliarConsulta = new Materia($row{'idMateria'},$row{'nombreMateria'});
            array_push($arrayMaterias, $MateriaAuxiliarConsulta);
         }

         $db->disconnectdb();
        return $arrayMaterias;
        
    }
}

?>
