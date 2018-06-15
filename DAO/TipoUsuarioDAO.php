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

            
        $pila = array();
        foreach ($ba as $c) {
            $actorAux = new TipoUsuario($c['id_tipo'],
                                        $c['nombre_tipo']);
            array_push($pila, $actorAux);
        }
        return $pila;
    }
}

?>
