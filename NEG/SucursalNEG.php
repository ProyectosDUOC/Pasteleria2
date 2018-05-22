<?php

if (!isset($rootDir))
    $rootDir = $_SERVER['DOCUMENT_ROOT'];
require_once($rootDir . "/DAO/SucursalDAO.php");


class SucursalNEG {
   public static function buscarSucursal($sucursal) {
        if (!SucursalDAO::sqlSelect($sucursal)) {
            return false;
        }
        return true;
    }
}

?>
