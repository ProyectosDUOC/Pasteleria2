<?php

if (!isset($rootDir))
    $rootDir = $_SERVER['DOCUMENT_ROOT'];
require_once($rootDir . "/DAO/TipoUsuarioDAO.php");

class TipoiUsuarioNEG {
      public static function buscarTipoUsuario($tipo) {
        if (!TipoUsuarioDAO::sqlSelect($tipo)) {
            return false;
        }
        return true;
    }
}
?>