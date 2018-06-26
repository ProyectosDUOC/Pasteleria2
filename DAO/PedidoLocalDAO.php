<?php
require_once "../Entities/PedidoLocal.php";
require_once "../BD/bd.php";

class PedidoLocalDAO
{
    public static function sqlInsert($pLocal)
    {
        $cc = BD::getInstancia();
        $stSql = "INSERT INTO pedido_local VALUES ";
        $stSql .= "(:id_pedido_local, :id_cliente, :glosa, :descuento, :total, :fecha_termino, :fecha_inscrita, :id_forma_envio, :id_sucursal)";
        $rs = $cc->db->prepare($stSql);

        $params = self::getParams($pLocal);

        return $rs->execute($params);
    }

    public static function sqlSelect($id_pedido_local)
    {
        $cc = BD::getInstancia();
        $stSql = "SELECT * FROM pedido_local WHERE id_pedido_local=:id_pedido_local";
        $rs = $cc->db->prepare($stSql);
        $rs->execute(array('id_pedido_local' => $id_pedido_local));
        $pla = $rs->fetch(); // pla: pedido local array

        $nuevopLocal = new PedidoLocal();
        $nuevopLocal->setIdPedidoLocal($pla['id_pedido_local']);
        $nuevopLocal->setIdCliente($pla['id_cliente']);
        $nuevopLocal->setGlosa($pla['glosa']);
        $nuevopLocal->setDescuento($pla['descuento']);
        $nuevopLocal->setTotal($pla['total']);
        $nuevopLocal->setFechaTermino($pla['fecha_termino']);
        $nuevopLocal->setFechaInscrita($pla['fecha_inscrita']);
        $nuevopLocal->setIdFormaEnvio($pla['id_forma_envio']);
        $nuevopLocal->setIdSucursal($pla['id_sucursal']);

        return $nuevopLocal;
    }
    
    public static function sqlSelectAll()
    {
        $cc = BD::getInstancia();
        $stSql = "SELECT * FROM pedido_local";
        $rs = $cc->db->prepare($stSql);
        $rs->execute();
        $pLocalsArray = $rs->fetchAll();
        return $pLocalsArray;
    }

    public static function sqlUpdate($pLocal)
    {
        $cc = BD::getInstancia();

        $stSql = "UPDATE pedido_local SET id_cliente=:id_cliente"
            . ",glosa=:glosa"
            . ",descuento=:descuento"
            . ",total=:total"
            . ",fecha_termino=:fecha_termino"
            . ",fecha_inscrita=:fecha_inscrita"
            . ",id_forma_envio=:id_forma_envio"
            . ",id_sucursal=:id_sucursal"
            . " WHERE id_pedido_local=:id_pedido_local";
        $rs = $cc->db->prepare($stSql);
        $params = self::getParams($pLocal);
        return $rs->execute($params);
    }

    public static function sqlDelete($pLocal)
    {
        $cc = BD::getInstancia();
        $stSql = "DELETE FROM pedido_local WHERE id_pedido_local=:id_pedido_local";
        $rs = $cc->db->prepare($stSql);
        $rs->execute(array("id_pedido_local" => $pLocal->getIdPedidoLocal() ));
    }

    public static function getParams($pLocal)
    {
        $params = array();
        $params['id_pedido_local'] = $pLocal->getIdPedidoLocal();
        $params['id_cliente'] = $pLocal->getIdCliente();
        $params['glosa'] = $pLocal->getGlosa();
        $params['descuento'] = $pLocal->getDescuento();
        $params['total'] = $pLocal->getTotal();
        $params['fecha_termino'] = $pLocal->getFechaTermino();
        $params['fecha_inscrita'] = $pLocal->getFechaInscrita();
        $params['id_forma_envio'] = $pLocal->getIdFormaEnvio();
        $params['id_sucursal'] = $pLocal->getIdSucursal();
        return $params;
    }

}
