<?php

if (!isset($rootDir)) $rootDir = $_SERVER['DOCUMENT_ROOT'];

require_once($rootDir . "/BD/bd.php");
require_once($rootDir . "/Entities/DetalleBoletaOnline.php");


class DetalleBoletaOnlineDAO{

    public static function sqlInsert($dOnline)
    {
        $cc = BD::getInstancia();
        $stSql = "INSERT INTO detalle_compra_online VALUES ";
        $stSql .= "(:id_detalle_online, :id_compra_online, :id_producto_p, :precio, :cant, :total)";
        $rs = $cc->db->prepare($stSql);

        $params = self::getParams($dOnline);

        return $rs->execute($params);
    }

    public static function sqlSelect($id_detalle_online)
    {
        $cc = BD::getInstancia();
        $stSql = "SELECT * FROM detalle_compra_online WHERE id_detalle_online=:id_detalle_online";
        $rs = $cc->db->prepare($stSql);
        $rs->execute(array('id_detalle_online' => $id_detalle_online));
        $dboa = $rs->fetch(); // dboa: detalle boleta online array 

        $dOnline = new DetalleBoletaOnline();
        $dOnline->setIdDetalleOnline($dboa['id_detalle_online']);
        $dOnline->setIdCompraOnline($dboa['id_compra_online']);
        $dOnline->setIdProductoP($dboa['id_producto_p']);
        $dOnline->setPrecio($dboa['precio']);
        $dOnline->setCant($dboa['cant']);
        $dOnline->setTotal($dboa['total']);

        return $dOnline;
    }

    public static function sqlSelectAll()
    {
        $cc = BD::getInstancia();
        $stSql = "SELECT * FROM detalle_compra_online";
        $rs = $cc->db->prepare($stSql);
        $rs->execute();
        $dOnlineArray = $rs->fetchAll();
        return $dOnlineArray;
    }

    public static function sqlUpdate($dOnline)
    {
        $cc = BD::getInstancia();

        $stSql = "UPDATE detalle_compra_online SET id_compra_online=:id_compra_online"
            . ",id_producto_p=:id_producto_p"
            . ",apellidos=:apellidos"
            . ",precio=:precio"
            . ",cant=:cant"
            . ",total=:total"
            . " WHERE id_detalle_online=:id_detalle_online";
        $rs = $cc->db->prepare($stSql);
        $params = self::getParams($dOnline);
        return $rs->execute($params);
    }

    public static function sqlDelete($dOnline)
    {
        $cc = BD::getInstancia();
        $stSql = "DELETE FROM detalle_compra_online WHERE id_detalle_online=:id_detalle_online";
        $rs = $cc->db->prepare($stSql);
        $rs->execute(array("id_detalle_online" => $dOnline->getIdDetalleOnline() ));
    }

    public static function getParams($dOnline)
    {
        $params = array();
        $params['id_detalle_online'] = $dOnline->getIdDetalleOnline();
        $params['id_compra_online'] = $dOnline->getIdCompraOnline();
        $params['id_producto_p'] = $dOnline->getIdProductoP();
        $params['precio'] = $dOnline->getPrecio();
        $params['cant'] = $dOnline->getCant();
        $params['total'] = $dOnline->getTotal();
        return $params;
    }
}