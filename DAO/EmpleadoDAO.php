<?php

if (!isset($rootDir)) $rootDir = $_SERVER['DOCUMENT_ROOT'];

require_once($rootDir . "/BD/bd.php");
require_once($rootDir . "/Entities/Empleado.php");

class EmpleadoDAO {

    public static function sqlSelect($id_empleado){
        $cc = BD::getInstancia();
        $stSql = "SELECT * FROM empleado WHERE id_empleado=:id_empleado";
        $rs = $cc->db->prepare($stSql);
        $rs->execute(array('id_empleado' => $id_empleado));
        $ba = $rs->fetch();
        $nuevaEmpleado = new Empleado($ba['id_empleado'],
                                      $ba['rut_empleado'],
                                      $ba['nombres'],
                                      $ba['apellidos'], 
                                      $ba['fecha_nacimiento'], 
                                      $ba['telefono'],
                                      $ba['id_comuna'],
                                      $ba['correo'],
                                      $ba['activo'] );
        return $nuevaEmpleado;
    }

    public static function lastValue(){
        $cc = BD::getInstancia();
        $stSql = "SELECT * FROM empleado order by id_empleado desc  limit 1";
        $rs = $cc->db->prepare($stSql);
        $rs->execute();
        $ba = $rs->fetch();
        $nuevaEmpleado = new Empleado($ba['id_empleado'],
                                      $ba['rut_empleado'],
                                      $ba['nombres'],
                                      $ba['apellidos'], 
                                      $ba['fecha_nacimiento'], 
                                      $ba['telefono'],
                                      $ba['id_comuna'],
                                      $ba['correo'],
                                      $ba['activo'] );
        return $nuevaEmpleado;        
    }
    //insert
    public static function sqlInsert($empleado) {
        $cc=BD::getInstancia();
        $stSql = "INSERT INTO empleado VALUES ";
        $stSql .= "(:id_empleado,:rut_empleado,:nombres,:apellidos,:fecha_nacimiento,:telefono,:id_comuna,:correo,:activo)";
        $rs = $cc->db->prepare($stSql);
        $params = self::getParams($empleado);
        return $rs->execute($params);
    }

    public static function sqlUpdate($empleado) {
        $cc=BD::getInstancia();

        $stSql = "UPDATE empleado SET rut_empleado=:rut_empleado"
                . ",nombres=:nombres"
                . ",apellidos=:apellidos"
                . ",fecha_nacimiento=:fecha_nacimiento"
                . ",telefono=:telefono"
                . ",id_comuna=:id_comuna"
                . ",correo=:correo"
                . ",activo=:activo"
                . " WHERE id_empleado=:id_empleado";
        $rs = $cc->db->prepare($stSql);
        $params = self::getParams($empleado);
      
        return $rs->execute($params);
    }

    public static function sqlDelete($empleado) {
        $cc=BD::getInstancia();
        $stSql = "DELETE FROM empleado WHERE id_empleado=:id_empleado";
        $rs = $cc->db->prepare($stSql);
        $rs->execute(array("id_empleado"=>$empleado->getIdEmpleado()));
    }

    public static function getParams($empleado){
        $params = array();
        $params['id_empleado'] = $empleado->getIdEmpleado();
        $params['rut_empleado'] =  $empleado->getRutEmpleado();
        $params['nombres'] = $empleado->getNombres();
        $params['apellidos'] = $empleado->getApellidos();
        $params['fecha_nacimiento'] = $empleado->getFechaNacimiento();
        $params['telefono'] = $empleado->getTelefono();
        $params['id_comuna'] = $empleado->getIdComuna();
        $params['correo'] = $empleado->getCorreo();
        $params['activo'] = $empleado->getActivo();
        return $params;
    }

    public static function readAll() { 
        $cc = BD::getInstancia();
        $stSql = "SELECT * FROM empleado";
        $rs = $cc->db->prepare($stSql);
        $rs->execute();
        $ba = $rs->fetchAll();
        
        $pila = array();
        foreach ($ba as $c) {
            $actorAux = new Empleado($c['id_empleado'],
                                            $c['rut_empleado'],
                                            $c['nombres'],
                                            $c['apellidos'],
                                            $c['fecha_nacimiento'],                                            
                                            $c['telefono'],
                                            $c['id_comuna'],
                                            $c['correo'],
                                            $c['activo']);
            array_push($pila, $actorAux);
        }
        return $pila;
    }
    
    

}

?>
