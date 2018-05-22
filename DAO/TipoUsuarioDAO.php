<?php

if (!isset($rootDir))
    $rootDir = $_SERVER['DOCUMENT_ROOT'];

require_once($rootDir . "/BD/BD.php");
require_once($rootDir . "/Entities/TipoUsuario.php");

class TipoUsuarioDAO {
    public static function sqlSelect($tipo) {
        $stSql = "select *  from  tipo_usuario ";
        $stSql .= " Where  id_tipo={$tipo->geIdTipo()}";
        $resultado = BD::getInstance()->sqlSelect($stSql);
        if (!$resultado)
            return false;
        return true;
    }
}

?>
