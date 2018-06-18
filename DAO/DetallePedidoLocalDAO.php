<?php

if (!isset($rootDir)) $rootDir = $_SERVER['DOCUMENT_ROOT'];

require_once($rootDir . "/BD/bd.php");
require_once($rootDir . "/Entities/DetallePedidoLocal.php");


class DetallePedidoLocalDAO
{
    public static function sqlInsert($dLocal)
    {
        $cc = BD::getInstancia();
        $stSql = "INSERT INTO detalle_pedido_local VALUES ";
        $stSql .= "(:id_detalle_local, :id_pedido_local, :id_producto_p, :precio, :cant, :total)";
        $rs = $cc->db->prepare($stSql);

        $params = self::getParams($dLocal);

        return $rs->execute($params);
    }

    public static function sqlSelect($id_detalle_local)
    {
        $cc = BD::getInstancia();
        $stSql = "SELECT * FROM detalle_pedido_local WHERE id_detalle_local=:id_detalle_local";
        $rs = $cc->db->prepare($stSql);
        $rs->execute(array('id_detalle_local' => $id_detalle_local));
        $dbla = $rs->fetch(); // dbla: detalle boleta local array 

        $dLocal = new DetallePedidoLocal();
        $dLocal->setIdDetalleLocal($dbla['id_detalle_local']);
        $dLocal->setIdPedidoLocal($dbla['id_pedido_local']);
        $dLocal->setIdProductoP($dbla['id_producto_p']);
        $dLocal->setPrecio($dbla['precio']);
        $dLocal->setCant($dbla['cant']);
        $dLocal->setTotal($dbla['total']);

        return $dLocal;
    }

    public static function sqlSelectAll()
    {
        $cc = BD::getInstancia();
        $stSql = "SELECT * FROM detalle_pedido_local";
        $rs = $cc->db->prepare($stSql);
        $rs->execute();
        $dLocalArray = $rs->fetchAll();
        return $dLocalArray;
    }

    public static function sqlUpdate($dLocal)
    {
        $cc = BD::getInstancia();

        $stSql = "UPDATE detalle_pedido_local SET id_compra_Local=:id_compra_Local"
            . ",id_producto_p=:id_producto_p"
            . ",apellidos=:apellidos"
            . ",precio=:precio"
            . ",cant=:cant"
            . ",total=:total"
            . " WHERE id_detalle_Local=:id_detalle_Local";
        $rs = $cc->db->prepare($stSql);
        $params = self::getParams($dLocal);
        return $rs->execute($params);
    }

    public static function sqlDelete($dLocal)
    {
        $cc = BD::getInstancia();
        $stSql = "DELETE FROM detalle_pedido_local WHERE id_detalle_Local=:id_detalle_Local";
        $rs = $cc->db->prepare($stSql);
        $rs->execute(array("id_detalle_Local" => $dLocal->getIdDetalleLocal() ));
    }

    public static function getParams($dLocal)
    {
        $params = array();
        $params['id_detalle_Local'] = $dLocal->getIdDetalleLocal();
        $params['id_pedido_local'] = $dLocal->getIdPedidoLocal();
        $params['id_producto_p'] = $dLocal->getIdProductoP();
        $params['precio'] = $dLocal->getPrecio();
        $params['cant'] = $dLocal->getCant();
        $params['total'] = $dLocal->getTotal();
        return $params;
    }
}
