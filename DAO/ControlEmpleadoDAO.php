<?php

if (!isset($rootDir))
    $rootDir = $_SERVER['DOCUMENT_ROOT'];
    

require_once($rootDir . "/BD/bd.php");
require_once($rootDir . "/Entities/ControlEmpleado.php");


class ControlEmpleadoDAO {

    public static function sqlSelect($id_control_e){
        $cc = BD::getInstancia();
        $stSql = "SELECT * FROM control_empleado WHERE id_control_e=:id_contorl_e";
        $rs = $cc->db->prepare($stSql);
        $rs->execute(array('id_control_e',$id_control_e));
        $ba = $rs->fetch(PDO::FETCH_ASSOC);
        $nuevoControl = new ControlEmpleado($ba['id_control_e'],
                                           $ba['usuario'],
                                           $ba['clave'],
                                           $ba['id_tipo'],
                                           $ba['id_empleado'],
                                           $ba['activo']);
        return $nuevoControl;
    }

    
    public static function lastValue(){
        $cc = BD::getInstancia();
        $stSql = "SELECT * FROM control_empleado order by id_control_e desc  limit 1";
        $rs = $cc->db->prepare($stSql);
        $rs->execute();
        $ba = $rs->fetch(PDO::FETCH_ASSOC);
        $nuevoControl = new ControlEmpleado($ba['id_control_e'],
                                           $ba['usuario'],
                                           $ba['clave'],
                                           $ba['id_tipo'],
                                           $ba['id_empleado'],
                                           $ba['activo']);
        return $nuevoControl;
    }

    //insert
    public static function sqlInsert($ControlEmpleado) {

        $cc=BD::getInstancia();
        $stSql = "INSERT INTO control_empleado VALUES ";
        $stSql .= "(:id_control_e,:usuario,:clave,:id_tipo,:id_empleado,:activo)";
        $rs = $cc->db->prepare($stSql);

        $params = self::getParams($ControlEmpleado);
        
        return $rs->execute($params);
    }

    public static function sqlUpdate($ControlEmpleado) {
        $cc=BD::getInstancia();

        $stSql = "UPDATE control_empleado SET activo=:activo, id_empleado=:id_empleado,usuario=:usuario, clave=:clave, id_tipo=:id_tipo"
                . " WHERE id_control_e=:id_control_e";
        $rs = $cc->db->prepare($stSql);
        $params = self::getParams($ControlEmpleado);
        return $rs->execute($params);
    }

    public static function sqlDelete($ControlEmpleado) {
        $cc=BD::getInstancia();
        $stSql = "DELETE FROM control_empleado  WHERE id_control_e=:id_control_e";
        $rs = $cc->db->prepare($stSql);
        $rs->execute(array("id_control_e"=>$ControlEmpleado->getIdControlE()));
    }

    public static function getParams($Control){
        $params = array();
        $params['id_control_e'] = $Control->getIdControlE();
        $params['usuario'] =  $Control->getUsuario();
        $params['clave'] = $Control->getClave();
        $params['id_tipo'] = $Control->getIdTipo();
        $params['id_empleado'] = $Control->getIdEmpleado();
        $params['activo'] = $Control->getActivo();
        return $params;
    }


    public static function readAll() { 
        $cc = BD::getInstancia();
        $stSql = "SELECT * FROM control_empleado";
        $rs = $cc->db->prepare($stSql);
        $rs->execute();
        $ba = $rs->fetchAll();
        
        $pila = array();
        foreach ($ba as $c) {
            $actorAux = new ControlEmpleado($c['id_control_e'],
                                            $c['id_empleado'],
                                            $c['usuario'],
                                            $c['clave'],
                                            $c['id_tipo'],
                                            $c['activo']);
            array_push($pila, $actorAux);
        }
        return $pila;
    }

}

?>