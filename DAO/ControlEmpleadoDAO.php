<?php

requiere("/BD/Conectar.php");

class ControlEmpleadoDAO {

    public function __construct(){

    }
    public  function insertar($control) {
        $usuario=$control->getUsuario();
        $clave=$control->getClave();
        $idTipo=$control->getIdTipo();
        $idEmeplado=$control->getIdEmpleado();
       
        $sql = "insert into control_empleado(usuario,clave,id_tipo,id_empleado,activo)";
        $sql .= "values('$usuario','$clave',$idTipo,$idEmeplado,1)";
     
        return ejecutarConsulta($sql);
    }
    public  function actualizar($control) {
        $usuario=$control->getUsuario();
        $clave=$control->getClave();
        $idTipo=$control->getIdTipo();
        $idEmeplado=$control->getIdEmpleado();
        $activo=$control->getActivo();
        $sql = "update control_empleado set clave='$clave' where id_empleado_e=$id";
        return ejecutarConsulta($sql);
    }
    public function desactivar($id){
        $sql = "UPDATE control_empleado set activo=0 where id_control_e=$id";
        return ejecutarConsulta($sql);
    }
    public function activar($id){
        $sql = "UPDATE control_empleado set activo=1 where id_control_e=$id";
        return ejecutarConsulta($sql);
    }
    public function buscar($id){
        $sql = "SELECT * FROM control_empleado WHERE id_control_e=$id";
        return ejecutarConsultaSimpleFila($sql);
    }
    public  function eliminar($control) {
        $id=$control->getIdControlE();
        $sql = "delete from control_empleado where id_control_e=$id";
        return ejecutarConsulta($sql);
    }
    public function listar(){
        $sql = "SELECT * FROM control_empleado";
        return ejecutarConsulta($sql);
    }
}

?>