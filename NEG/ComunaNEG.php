<?php

if (!isset($rootDir))
    $rootDir = $_SERVER['DOCUMENT_ROOT'];
require_once($rootDir . "/DAO/ComunaDAO.php");

class ComunaNEG {
    public static function buscarBoleta($boleta) {
        if (!ComunaDAO::sqlSelect($boleta)) {
            return false;
        }
       return true;
    }

    public static function listarComuna() {
        return ComunaDAO::sqlSelectTodo();
    }

}

?>