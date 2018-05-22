<?php

    if (!isset($rootDir)) $rootDir = $_SERVER['DOCUMENT_ROOT'];

    require_once($rootDir . "/bd.php");
    require_once($rootDir . "/Cliente.php");
    
    class ClienteDAO {
        public static function sqlInsert($cliente){
        $stSql  = "insert into cliente(";
        $stSql .= "rut ,nombres ,apellidos, fechaNacimiento, telefono, correo, comuna,activo";
        $stSql .= " )values (";
        $stSql .=  "'{$cliente->getRut()}'"
                . ",'{$cliente->getNombres()}'"
                . ",'{$cliente->getApellidos()}'"
                . ",'{$cliente->getFechaNacimiento()}'"
                . ",{$cliente->getTelefono()}"
                . ",'{$cliente->getCorreo()}'"
                . ",{$cliente->getIdComuna()}"
                . ",{$cliente->getActivo()}"
                . ")";
	    return BD::getInstance()->sqlEjecutar($stSql);
        }
    }
?>