<?php

if (!isset($rootDir))
    $rootDir = $_SERVER['DOCUMENT_ROOT'];

require_once($rootDir . "/BD/BD.php");
require_once($rootDir . "/Entities/ControlEmpleado.php");

class ControlEmpleadoDAO {
   
    
     //insert
    public static function sqlInsert($control) {
        $stSql = "insert into control_empleado (";
        $stSql .= " usuario,clave,id_tipo,id_empleado,activo";
        $stSql .= " )values (";
        $stSql .= " '{$control->getUsuario()}'"
                . ",'{$control->getClave()}'"
                . ",{$control->getIdTipo()}"
                . ",{$control->getIdEmplado()}"
                . ",{$control->getActivo()}"
                . ")";
        return BD::getInstance()->sqlEjecutar($stSql);
    }
    
    public static function sqlUpdate($control) {
        $stSql = "update control_empleado SET ";
        $stSql .= " usuario='{$control->getUsuario()}'"
                . ",clave='{$control->getClave()}'"
                . ",id_tipo={$control->getIdTipo()}"
                . ",id_empleado={$control->getIdEmpleado()}"
                . ",activo={$control->getActivo()}";
        $stSql .= " Where  id_control_e={$control->getIdControlE()}"
        ;
        return BD::getInstance()->sqlEjecutar($stSql);
    }

    public static function sqlDelete($control) {
        $stSql = "delete from  control_empleado ";
        $stSql .= " Where  id_control_e={$control->getIdControlE()}";
        return BD::getInstance()->sqlEjecutar($stSql);
    }

    /* METODO BUSCAR */

    public static function sqlSelect($control) {
        $stSql = "select *  from  control_empleado ";
        $stSql .= " Where  id_control_e={$control->geIdControlE()}";
        $resultado = BD::getInstance()->sqlSelect($stSql);
        if (!$resultado)
            return false;
        return true;
    }
  
    public static function sqlFetch() {
        $fila = BD::getInstance()->sqlFetch();
        if (!$fila)
            return null;
        $controlAux = new ControlEmpleado($fila["id_control_e"]
                , $fila["usuario"]
                , $fila["clave"]
                , $fila["id_tipo"]
                , $fila["id_empleado"]
                , $fila["activo"]);
        return $controlAux;
    }

    public static function sqlFetchControl($control) {
        $fila = BD::getInstance()->sqlFetch();
        if (!$fila)
            return false;
        $control->setIdControlE($fila["id_control_e"]);
        $control->setUsuario($fila["usuario"]);
        $control->setClave($fila["clave"]);
        $control->setIdTipo($fila["id_tipo"]);
        $control->setIdEmpleado($fila["id_empleado"]);
        $control->setActivo($fila["activo"]);
        return true;
    }

    public static function sqlSelectOne($controlId) {
        $stSql = "select *  from control_empleado ";
        $stSql .= " Where  id_control_e=$controlId";
        
        $resultado = BD::getInstance()->sqlSelect($stSql);
        
        if (!$resultado)
            return null;
        $fila = BD::getInstance()->sqlFetch();
        if (!$fila)
            return null;
       
        $controlAux = new ControlEmpleado($fila["id_control_e"]
                , $fila["usuario"]
                , $fila["clave"]
                , $fila["id_tipo"]
                , $fila["id_empleado"]
                , $fila["activo"]);
        return $controlAux;
    }
/*
      CREATE TABLE control_empleado (
      id_control_e   INTEGER NOT NULL,
      usuario        VARCHAR(30) NOT NULL,
      clave          VARCHAR(30) NOT NULL,
      id_tipo        INTEGER NOT NULL,
      id_empleado    INTEGER NOT NULL,
      activo         INTEGER NOT NULL
      );
     */
    public static function sqlSelectOneControl($control) {
        // Crea el Sql utilizando el controlId de la clase
        $stSql = "select *  from  control_empleado ";
        $stSql .= " Where  id_control_e={$control->getControlIdE()}";

        $resultado = BD::getInstance()->sqlSelect($stSql);
        if (!$resultado)
            return false;
        $fila = BD::getInstance()->sqlFetch();
        if (!$fila)
            return null;   
        $control->setIdControlE($fila["id_control_e"]);
        $control->setUsuario($fila["usuario"]);
        $control->setClave($fila["clave"]);
        $control->setIdTipo($fila["id_tipo"]);
        $control->setIdEmpleado($fila["id_empleado"]);
        $control->setActivo($fila["activo"]);
        return true;
    }

    public static function sqlSelectTodo() {
        $stSql = "select *  from  control_empleado ";        
        $miArreglo = BD::getInstance()->sqlSelectTodo($stSql);        
        $pila = array();
        foreach ($miArreglo as $fila) {
            $actorAux = new ControlEmpleado($fila["id_control_e"]
                , $fila["usuario"]
                , $fila["clave"]
                , $fila["id_tipo"]
                , $fila["id_empleado"]
                , $fila["activo"]);		
            array_push($pila, $actorAux);
        }
        return $pila;
    }
}

?>