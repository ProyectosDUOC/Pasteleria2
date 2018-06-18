<?php
if (!isset($rootDir)) $rootDir = $_SERVER['DOCUMENT_ROOT'];

require_once($rootDir . "/BD/bd.php");
require_once($rootDir . "/Entities/CompraOnline.php");


class CompraOnlineDAO
{
    public static function sqlInsert($compraOnline)
    {
        $cc = BD::getInstancia();
        $stSql = "INSERT INTO compra_online VALUES ";
        $stSql .= "(:id_compra_online, :id_cliente, :descuento, :total, :glosa, :id_forma_envio, :id_forma_pago, :id_sucursal)";
        $rs = $cc->db->prepare($stSql);

        $params = self::getParams($compraOnline);

        return $rs->execute($params);
    }

    public static function sqlSelect($id_compra_online)
    {
        $cc = BD::getInstancia();
        $stSql = "SELECT * FROM compra_online WHERE id_compra_online=:id_compra_online";
        $rs = $cc->db->prepare($stSql);
        $rs->execute(array('id_compra_online' => $id_compra_online));
        $coa = $rs->fetch(); // coa: compra online array

        $nuevaCompraOnline = new CompraOnline();
        $nuevaCompraOnline->setIdCompraOnline($coa['id_compra_online']);
        $nuevaCompraOnline->setIdCliente($coa['id_cliente']);
        $nuevaCompraOnline->setDescuento($coa['descuento']);
        $nuevaCompraOnline->setTotal($coa['total']);
        $nuevaCompraOnline->setGlosa($coa['glosa']);
        $nuevaCompraOnline->setIdFormaEnvio($coa['id_forma_envio']);
        $nuevaCompraOnline->setIdFormaPago($coa['id_forma_pago']);
        $nuevaCompraOnline->setIdSucursal($coa['id_sucursal']);

        return $nuevaCompraOnline;
    }

    public static function sqlSelectAll()
    {
        $cc = BD::getInstancia();
        $stSql = "SELECT * FROM compra_online";
        $rs = $cc->db->prepare($stSql);
        $rs->execute();
        $compraOnlineArray = $rs->fetchAll();
        return $compraOnlineArray;
    }

    public static function sqlUpdate($compraOnline)
    {
        $cc = BD::getInstancia();

        $stSql = "UPDATE compra_online SET id_cliente=:id_cliente"
            . ",descuento=:descuento"
            . ",total=total"
            . ",glosa=:glosa"
            . ",id_forma_envio=:id_forma_envio"
            . ",id_forma_pago=:id_forma_pago"
            . ",id_sucursal=:id_sucursal"
            . " WHERE id_compra_online=:id_compra_online";
        $rs = $cc->db->prepare($stSql);
        $params = self::getParams($compraOnline);
        return $rs->execute($params);
    }

    public static function sqlDelete($compraOnline)
    {
        $cc = BD::getInstancia();
        $stSql = "DELETE FROM cliente WHERE id_cliente=:id_cliente";
        $rs = $cc->db->prepare($stSql);
        $rs->execute(array("id_cliente" => $compraOnline->getIdCompraOnline() ));
    }

    public static function getParams($compraOnline)
    {
        $params = array();
        $params['id_compra_online'] = $compraOnline->getIdCompraOnline();
        $params['id_cliente'] = $compraOnline->getIdCliente();
        $params['descuento'] = $compraOnline->getDescuento();
        $params['total'] = $compraOnline->getTotal();
        $params['glosa'] = $compraOnline->getGlosa();
        $params['id_forma_envio'] = $compraOnline->getIdFormaEnvio();
        $params['id_forma_pago'] = $compraOnline->getIdFormaPago();
        $params['id_sucursal'] = $compraOnline->getIdSucursal();
        return $params;
    }
}