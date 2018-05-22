<?php

if (!isset($rootDir))
    $rootDir = $_SERVER['DOCUMENT_ROOT'];

require_once($rootDir . "/BD/BD.php");
require_once($rootDir . "/Entities/FormaPago.php");

class FormaPagoDAO {
   /* METODO BUSCAR */
    public static function sqlSelect($forma) {
        $stSql = "select *  from  forma_pago ";
        $stSql .= " Where  id_forma_pago={$forma->geIdFormaPago()}";
        $resultado = BD::getInstance()->sqlSelect($stSql);
        if (!$resultado)
            return false;
        return true;
    }

    public static function sqlFetch() {
        $fila = BD::getInstance()->sqlFetch();
        if (!$fila)
            return null;
        $formaAux = new FormaPago($fila["id_forma_pago"]
                , $fila["nombre_pago"]);
        return $formaAux;
    }

    public static function sqlSelectTodo() {
        $stSql = "select *  from  forma_pago ";
        $miArreglo = BD::getInstance()->sqlSelectTodo($stSql);
        $pila = array();
        foreach ($miArreglo as $fila) {
            $actorAux = new FormaPago($fila["id_forma_pago"]
                    , $fila["nombre_pago"]);
            array_push($pila, $actorAux);
        }
        return $pila;
    }

}

?>