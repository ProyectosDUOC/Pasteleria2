<?php

if (!isset($rootDir))
    $rootDir = $_SERVER['DOCUMENT_ROOT'];

require_once($rootDir . "/BD/bd.php");
require_once($rootDir . "/Entities/FormaPago.php");

class FormaPagoDAO {

    public static function sqlSelectAll()
    {
        $cc = BD::getInstancia();
        $stSql = "SELECT * FROM forma_pago";
        $rs = $cc->db->prepare($stSql);
        $rs->execute();
        $formasPago = $rs->fetchAll();
        $pila = array();
        foreach ($formasPago as $c) {
            $actorAux = new FormaPago($c['id_forma_pago'],
                                            $c['nombre_pago']);
            array_push($pila, $actorAux);
        }
        return $pila;
    }

}

?>