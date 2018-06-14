<?php

// Declaramos una variable $rootDir si es que no existe
// isset==> si existe o no una variable
if (!isset($rootDir))
    $rootDir = $_SERVER['DOCUMENT_ROOT'];
//Agregamos desde BD.PHPy la Entitie Boleta
// desde el Path raiz ==> $rootDir
require_once($rootDir . "/BD/bd.php");
require_once($rootDir . "/Entities/Boleta.php");

class BoletaDAO {

    public static function sqlSelect($id_boleta){
        $cc = BD::getInstancia();
        $stSql = "SELECT * FROM boleta WHERE id_boleta=:id_boleta";
        $rs = $cc->db->prepare($stSql);
        $rs->execute(array('id_boleta',$id_boleta));
        $ba = $rs->fetch(PDO::FETCH_ASSOC);
        $nuevaBoleta = new Boleta($ba['id_boleta'], $ba['total'], $ba['id_empleado'], $ba['id_forma_pago'], $ba['id_suscursal'], $ba['id_pedido_local']);
        return $nuevaBoleta;
    }

    //insert
    public static function sqlInsert($boleta) {

        $cc=BD::getInstancia();
        $stSql = "INSERT INTO boleta VALUES ";
        $stSql .= "(:id_boleta,:total,:id_empleado,:id_forma_pago,:id_sucursal,:id_pedido_local)";
        $rs = $cc->db->prepare($stSql);

        $params = getParams($boleta);
        
        return $rs->execute($params);
    }

    public static function sqlUpdate($boleta) {
        $cc=BD::getInstancia();

        $stSql = "UPDATE boleta SET total=:total"
                . ",id_empleado=:id_empleado"
                . ",id_forma_pago=:id_forma_pag"
                . ",id_sucursal=:id_sucursal"
                . ",id_pedido_local=:id_pedido_local"
                . " WHERE id_boleta=:id_boleta";
        $rs = $cc->db->prepare($stSql);

        $params = getParams($boleta);

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
        $params["id_boleta"] = $boleta->getIdBoleta();
        $params['total'] =  $boleta->getTotal();
        $params['id_empleado'] = $boleta->getIdEmpleado();
        $params['id_forma_pago'] = $boleta->getIdFormaPago();
        $params['id_sucursal'] = $boleta->getIdSucursal();
        $params['id_pedido_local'] = $boleta->getIdPedidoLocal();
        return $params;
    }
    
    

}

?>
