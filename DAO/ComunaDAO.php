<?php

if (!isset($rootDir)) $rootDir = $_SERVER['DOCUMENT_ROOT'];

require_once($rootDir . "/BD/bd.php");
require_once($rootDir . "/Entities/Comuna.php");

class ComunaDAO {
    
    public static function readAll(){
        $cc = BD::getInstancia();
        $stSql = "SELECT * FROM comuna";
        $rs = $cc->db->prepare($stSql);
        $rs->execute();
        $comunasArray = $rs->fetchAll();
        $pila = array();
        foreach ($comunasArray as $c) {
            $actorAux = new Comuna($c['id_comuna'],
                                            $c['nombre_comuna']);
            array_push($pila, $actorAux);
        }
        return $pila;
    }

}
?>