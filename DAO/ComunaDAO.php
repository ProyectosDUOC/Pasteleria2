<?php

if (!isset($rootDir)) $rootDir = $_SERVER['DOCUMENT_ROOT'];

require_once($rootDir . "/BD/BD.php");
require_once($rootDir . "/Entities/Comuna.php");

class ComunaDAO {
    /* METODO BUSCAR */
    public static function sqlSelect($comuna) {
        $stSql = "select *  from  comuna ";
        $stSql .= " Where  id_comuna={$comuna->geIdComuna()}";
        $resultado = BD::getInstance()->sqlSelect($stSql);
        if (!$resultado)
            return false;
        return true;
    }

    public static function sqlFetch() {
        $fila = BD::getInstance()->sqlFetch();
        if (!$fila)
            return null;
        $comunaAux = new Comuna($fila["id_comuna"]
                , $fila["nombre_comuna"]);
        return $comunaAux;
    }

    public static function sqlSelectTodo() {
        $stSql = "select *  from  comuna";
        $miArreglo = BD::getInstance()->sqlSelectTodo($stSql);
        $pila = array();
        foreach ($miArreglo as $fila) {
            $comunaAux = new Comuna($fila["id_comuna"]
                    , $fila["nombre_comuna"]);
            array_push($pila, $comunaAux);
        }
        return $pila;
    }

}
?>