<?php

if (!isset($rootDir))
    $rootDir = $_SERVER['DOCUMENT_ROOT'];
    

require_once($rootDir . "/Entities/ControlEmpleado.php");
require("/BD/bd.php");

class ControlEmpleadoDAO {

    public static function sqlSelect($id_control_e){
        $cc = BD::getInstancia();
        $stSql = "SELECT * FROM control_empleado WHERE id_control_e=:id_contorl_e";
        $rs = $cc->db->prepare($stSql);
        $rs->execute(array('id_control_e',$id_control_e));
        $ba = $rs->fetch(PDO::FETCH_ASSOC);
        $nuevoControl = new ControlEmpleado($ba['id_control_e'],
                                           $ba['usuairo'],
                                           $ba['clave'],
                                           $ba['id_tipo'],
                                           $ba['id_empleado'],
                                           $ba['activo']);
        return $nuevoControl;
    }

    //insert
    public static function sqlInsert($ControlEmpleado) {

        $cc=BD::getInstancia();
        $stSql = "INSERT INTO contorl_empleado VALUES ";
        $stSql .= "(null,:usuario,:clave,:id_tipo,:id_empleado,:activo)";
        $rs = $cc->db->prepare($stSql);

        $params = getParams($ControlEmpleado);
        
        return $rs->execute($params);
    }

    public static function sqlUpdate($ControlEmpleado) {
        $cc=BD::getInstancia();

        $stSql = "UPDATE control_empleado SET clave=:clave"
                . " WHERE id_control_e=:id_control_e";
        $rs = $cc->db->prepare($stSql);
        $params = getParams($ControlEmpleado);
        return $rs->execute($params);
    }

    public static function sqlDelete($ControlEmpleado) {
        $cc=BD::getInstancia();
        $stSql = "DELETE FROM  WHERE id_control_e=:id_control_e";
        $rs = $cc->db->prepare($stSql);
        $rs->execute(array("id_control_e"=>$ControlEmpleado->getIdControlE()));
    }

    public static function getParams($Control){
        $params = array();
       // $params['id_control_e'] = $Control->getIdControlE();
        $params['usuario'] =  $Control->getUsuario();
        $params['clave'] = $Control->getClave();
        $params['id_tipo'] = $Control->getIdTipo();
        $params['id_empleado'] = $Control->getIdEmpleado();
        $params['activo'] = $Control->getActivo();
        return $params;
    }

}

?>