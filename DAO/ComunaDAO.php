<?php

if (!isset($rootDir)) $rootDir = $_SERVER['DOCUMENT_ROOT'];

require_once($rootDir . "/BD/BD.php");
require_once($rootDir . "/Entities/Comuna.php");

class ComunaDAO {
    
    public static function sqlSelectAll(){
        $cc = BD::getInstancia();
        $stSql = "SELECT * FROM comuna";
        $rs = $cc->db->prepare($stSql);
        $rs->execute();
        $comunasArray = $rs->fetchAll();
        return $comunasArray;
    }

}
?>