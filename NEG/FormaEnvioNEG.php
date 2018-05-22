<?php

if (!isset($rootDir))
    $rootDir = $_SERVER['DOCUMENT_ROOT'];
require_once($rootDir . "/DAO/FormaEnvioDAO.php");

class FormaEnvioNEG {

    public static function buscarForma($forma) {
        if (!FormaEnvioDAO::sqlSelect($forma)) {
            return false;
        }
        return true;
    }

    public static function listarForma() {
        return FormaEnvioDAO::sqlSelectTodo();
    }

}

?>