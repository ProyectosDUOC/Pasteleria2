<?php

if (!isset($rootDir))
    $rootDir = $_SERVER['DOCUMENT_ROOT'];

require_once($rootDir . "/BD/bd.php");
require_once($rootDir . "/Entities/TipoUsuario.php");

class TipoUsuarioDAO {
    public static function readAll() { 
        $cc = BD::getInstancia();
        $stSql = "SELECT * FROM tipo_usuario";
        $rs = $cc->db->prepare($stSql);
        $rs->execute();
        $ba = $rs->fetchAll();
        return $ba;
    }
}

?>
