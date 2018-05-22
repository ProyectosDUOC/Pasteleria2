<?php


if (!isset($rootDir))
    $rootDir = $_SERVER['DOCUMENT_ROOT'];

require_once($rootDir . "/BD/BD.php");
require_once($rootDir . "/Entities/Sucursal.php");

class SucursalDAO {
    public static function sqlSelect($sucursal) {
        $stSql = "select *  from  sucursal ";
        $stSql .= " Where  id_sucursal={$sucursal->geIdSucursal()}";
        $resultado = BD::getInstance()->sqlSelect($stSql);
        if (!$resultado)
            return false;
        return true;
    }
}
?>