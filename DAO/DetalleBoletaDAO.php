<?php

// Declaramos una variable $rootDir si es que no existe
// isset==> si existe o no una variable
if (!isset($rootDir))
    $rootDir = $_SERVER['DOCUMENT_ROOT'];
//Agregamos desde BD.PHPy la Entitie Boleta
// desde el Path raiz ==> $rootDir
require_once($rootDir . "/BD/bd.php");
require_once($rootDir . "/Entities/Boleta.php");

class DetalleBoletaDAO {

    //insert
    public static function sqlInsert($detalleBoleta) {
        $cc = BD::getInstancia();
        $stSql = "insert into detalle_boleta VALUES";
        $stSql .= " (:id_detalle,:id_producto_p,:id_boleta,:precio,:cant,:total)";
        $rs = $cc->db->prepare($stSql);
        $params = self::getParams($detalleBoleta);
        return $rs->execute($params);
    }
    
    public static function sqlSelect($id_detalle){
        $cc = BD::getInstancia();
        $stSql = "SELECT * FROM detalle_boleta WHERE id_detalle=:id_detalle";
        $rs = $cc->db->prepare($stSql);
        $rs->execute(array('id_detalle' => $id_detalle));
        $dbarr = $rs->fetch();
        
        $nuevoDetalle = new DetalleBoleta($dbarr['id_detalle'],
                                            $dbarr['id_producto_p'],
                                            $dbarr['id_boleta'],
                                            $dbarr['precio'],
                                            $dbarr['cant'],
                                            $dbarr['total']);
        return $nuevoDetalle;
    }

    public static function lastId(){
        //obtener last id
    }

    public static function sqlSelectAll()
    {
        $cc = BD::getInstancia();
        $stSql = "SELECT * FROM detalle_boleta";
        $rs = $cc->db->prepare($stSql);
        $rs->execute();
        $detallesArray = $rs->fetchAll();
        return $detallesArray;
    }

    public static function sqlUpdate($detalleBoleta) {
        $cc = BD::getInstancia();
        $stSql = "UPDATE detalle_boleta SET "
                . "id_producto_p=:id_producto_p"
                . ",id_boleta=:id_boleta="
                . ",precio=:precio"
                . ",cant=:cant"
                . ",total=:total"
                . " WHERE id_detalle=:id_detalle";
        $rs = $cc->db->prepare($stSql);
        $params = self::getParams($detalleBoleta);
        return $rs->execute($params);
    }

    public static function sqlDelete($detalleBoleta) {
        $stSql = "DELETE FROM detalle_boleta WHERE id_detalle=:id_detalle";
        $cc = BD::getInstancia();
        $rs = $cc->db->prepare($stSql);
        $rs->execute(array("id_detalle" => $detalleBoleta->getIdDetalle() ));
    }

    public static function getParams($detalleBoleta)
    {
        $params = array();
        $params['id_detalle'] = $detalleBoleta->getIdDetalle();
        $params['id_producto_p'] = $detalleBoleta->getIdProductoP();
        $params['id_boleta'] = $detalleBoleta->getIdBoleta();
        $params['precio'] = $detalleBoleta->getPrecio();
        $params['cant'] = $detalleBoleta->getCant();
        $params['total'] = $detalleBoleta->getTotal();
        return $params;
    }
}
?>