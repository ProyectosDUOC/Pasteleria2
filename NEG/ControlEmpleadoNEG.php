<?php

if (!isset($rootDir))
    $rootDir = $_SERVER['DOCUMENT_ROOT'];
require_once($rootDir . "/DAO/ControlEmpleadoDAO.php");

class ControlEmpleadoNEG {
   public static function crearControl($control) {       
        $controlAux = $control;		
        if (ControlEmpleadoDAO::sqlSelectOneControl($controlAux)) {
                return false;
        }
        else {
            if (ControlEmpleadoDAO::sqlInsert($control))
                return false;
        }
        return true;
    }

    public static function eliminarControl($control) {
        if (!ControlEmpleadoDAO::sqlSelectOneControl($control)) {
            return false;
        }
        if (!ControlEmpleadoDAO::sqlDelete($control))
            return false;
        return true;
    }

    public static function buscarControl($control) {
        if (!ControlEmpleadoDAO::sqlSelectOneControl($control)) {
            return false;
        }
        return true;
    }

    public static function listarControl() {
        return ControlEmpleadoDAO::sqlSelectTodo();
    }
}

?>