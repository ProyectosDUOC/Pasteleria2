<?php


if (!isset($rootDir)) $rootDir = $_SERVER['DOCUMENT_ROOT'];

require_once($rootDir . "/BD/bd.php");
require_once($rootDir . "/Entities/ControlCliente.php");

class ControlClienteDAO
{
    public static function sqlInsert($controlCliente)
    {
        $cc = BD::getInstancia();
        $stSql = "INSERT INTO control_cliente VALUES ";
        $stSql .= "(:id_control_c, :id_cliente, :usuario, :clave, :activo)";
        $rs = $cc->db->prepare($stSql);

        $params = self::getParams($controlCliente);

        return $rs->execute($params);
    }

    public static function sqlSelect($id_control_c)
    {
        $cc = BD::getInstancia();
        $stSql = "SELECT * FROM id_control_c WHERE id_control_c=:id_control_c";
        $rs = $cc->db->prepare($stSql);
        $rs->execute(array('id_control_c' => $id_control_c));
        $cca = $rs->fetch(); // cca: control cliente array

        $nuevoControlC = new ControlCliente();
        $nuevoControlC->setIdControlC($cca['id_control_c']);
        $nuevoControlC->setIdCliente($cca['id_cliente']);
        $nuevoControlC->setUsuario($cca['usuario']);
        $nuevoControlC->setClave($cca['clave']);
        $nuevoControlC->setActivo($cca['activo']);

        return $nuevoControlC;
    }

    public static function sqlSelectAll()
    {
        $cc = BD::getInstancia();
        $stSql = "SELECT * FROM control_cliente";
        $rs = $cc->db->prepare($stSql);
        $rs->execute();
        $controlCArray = $rs->fetchAll();
        return $controlCArray;
    }

    public static function sqlUpdate($controlCliente)
    {
        $cc = BD::getInstancia();

        $stSql = "UPDATE control_cliente SET "
            . " id_cliente=:id_cliente"
            . ",usuario=:usuario"
            . ",clave=clave"
            . ",activo=:activo"
            . " WHERE id_control_c=:id_control_c";
        $rs = $cc->db->prepare($stSql);
        $params = self::getParams($controlCliente);
        return $rs->execute($params);
    }

    public static function sqlDelete($controlCliente)
    {
        $cc = BD::getInstancia();
        $stSql = "DELETE FROM control_cliente WHERE id_control_c=:id_control_c";
        $rs = $cc->db->prepare($stSql);
        $rs->execute(array("id_control_c" => $controlCliente->getIdControlC() ));
    }

    public static function getParams($controlCliente)
    {
        $params = array();
        $params['id_control_c'] = $controlCliente->getIdControlC();
        $params['id_cliente'] = $controlCliente->getIdCliente();
        $params['usuario'] = $controlCliente->getUsuario();
        $params['clave'] = $controlCliente->getClave();
        $params['activo'] = $controlCliente->getActivo();
        return $params;
    }
}