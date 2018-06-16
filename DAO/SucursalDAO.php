<?php


if (!isset($rootDir))
    $rootDir = $_SERVER['DOCUMENT_ROOT'];

require_once($rootDir . "/BD/BD.php");
require_once($rootDir . "/Entities/Sucursal.php");

class SucursalDAO {
    public static function sqlSelectAll()
    {
        $cc = BD::getInstancia();
        $stSql = "SELECT * FROM sucursal";
        $rs = $cc->db->prepare($stSql);
        $rs->execute();
        $sucursalArray = $rs->fetchAll();
        return $sucursalArray;
    }

}
?>