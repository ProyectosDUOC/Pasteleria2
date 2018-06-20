<?php

if (!isset($rootDir)) $rootDir = $_SERVER['DOCUMENT_ROOT'];

require_once($rootDir . "/BD/bd.php");
require_once($rootDir . "/Entities/Boleta.php");

class BoletaDAO {

    public static function sqlSelect($id_boleta){
        $cc = BD::getInstancia();
        $stSql = "SELECT * FROM boleta WHERE id_boleta=:id_boleta";
        $rs = $cc->db->prepare($stSql);
        $rs->execute(array('id_boleta' => $id_boleta));
        $ba = $rs->fetch();
        $nuevaBoleta = new Boleta($ba['id_boleta'], $ba['total'], $ba['id_empleado'], $ba['id_forma_pago'], $ba['id_sucursal'], $ba['id_pedido_local']);
        return $nuevaBoleta;
    }

    public static function lastId(){
        $cc = BD::getInstancia();
        $stSql = "SELECT id_boleta FROM boleta order by id_boleta desc limit 1";
        $rs = $cc->db->prepare($stSql);
        $rs->execute();
        $dba = $rs->fetch(PDO::FETCH_ASSOC);
        return $dba['id_boleta'];
    }

    //insert
    public static function sqlInsert($boleta) {

        $cc=BD::getInstancia();
        $stSql = "INSERT INTO boleta VALUES ";
        $stSql .= "(:id_boleta,:total,:id_empleado,:id_forma_pago,:id_sucursal,:id_pedido_local)";
        $rs = $cc->db->prepare($stSql);

        $params = self::getParams($boleta);
        
        return $rs->execute($params);
    }

    public static function sqlUpdate($boleta) {
        $cc=BD::getInstancia();

        $stSql = "UPDATE boleta SET total=:total"
                . ",id_empleado=:id_empleado"
                . ",id_forma_pago=:id_forma_pago"
                . ",id_sucursal=:id_sucursal"
                . ",id_pedido_local=:id_pedido_local"
                . " WHERE id_boleta=:id_boleta";
        $rs = $cc->db->prepare($stSql);

        $params = self::getParams($boleta);

        return $rs->execute($params);
    }

    public static function sqlDelete($boleta) {
        $cc=BD::getInstancia();
        $stSql = "DELETE FROM boleta WHERE id_boleta=:id_boleta";
        $rs = $cc->db->prepare($stSql);
        $rs->execute(array("id_boleta"=>$boleta->getIdBoleta()));
    }

    public static function getParams($boleta){
        $params = array();
        $params['id_boleta'] = $boleta->getIdBoleta();
        $params['total'] =  $boleta->getTotal();
        $params['id_empleado'] = $boleta->getIdEmpleado();
        $params['id_forma_pago'] = $boleta->getIdFormaPago();
        $params['id_sucursal'] = $boleta->getIdSucursal();
        $params['id_pedido_local'] = $boleta->getIdPedidoLocal();
        //print_r($params);
        return $params;
    }
    
    

}

?>
