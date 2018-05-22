<?php

if (!isset($rootDir))
    $rootDir = $_SERVER['DOCUMENT_ROOT'];

require_once($rootDir . "/BD/BD.php");
require_once($rootDir . "/Entities/FormaEnvio.php");

class FormaEnvioDAO {
    /* METODO BUSCAR */

    public static function sqlSelect($forma) {
        $stSql = "select *  from  forma_envio ";
        $stSql .= " Where  id_forma_envio={$forma->geIdFormaEnvio()}";
        $resultado = BD::getInstance()->sqlSelect($stSql);
        if (!$resultado)
            return false;
        return true;
    }

    public static function sqlFetch() {
        $fila = BD::getInstance()->sqlFetch();
        if (!$fila)
            return null;
        $formaAux = new FormaEnvio($fila["id_forma_envio"]
                , $fila["nombre_envio"]);
        return $formaAux;
    }

    public static function sqlSelectTodo() {
        $stSql = "select *  from  forma_envio ";
        $miArreglo = BD::getInstance()->sqlSelectTodo($stSql);
        $pila = array();
        foreach ($miArreglo as $fila) {
            $actorAux = new FormaEnvio($fila["id_forma_envio"]
                    , $fila["nombre_envio"]);
            array_push($pila, $actorAux);
        }
        return $pila;
    }

}
