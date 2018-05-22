<?php

if (!isset($rootDir))
    $rootDir = $_SERVER['DOCUMENT_ROOT'];
require_once($rootDir . "/DAO/FormaPagoDAO.php");

class FormaPagoNEG {

    public static function buscarForma($forma) {
        if (!FormaPagoDAO::sqlSelect($forma)) {
            return false;
        }
        return true;
    }

    public static function listarForma() {
        return FormaPagoDAO::sqlSelectTodo();
    }

}

?>