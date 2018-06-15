<?php

if (!isset($rootDir))
    $rootDir = $_SERVER['DOCUMENT_ROOT'];

require_once($rootDir . "/BD/bd.php");
require_once($rootDir . "/Entities/FormaEnvio.php");

class FormaEnvioDAO {

    public static function sqlSelectAll()
    {
        $cc = BD::getInstancia();
        $stSql = "SELECT * FROM forma_envio";
        $rs = $cc->db->prepare($stSql);
        $rs->execute();
        $formasEnvio = $rs->fetchAll();
        return $formasEnvio;
    }

}
