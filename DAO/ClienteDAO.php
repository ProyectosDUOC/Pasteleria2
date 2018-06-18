<?php

if (!isset($rootDir)) $rootDir = $_SERVER['DOCUMENT_ROOT'];

require_once($rootDir . "/BD/bd.php");
require_once($rootDir . "/Entities/Cliente.php");


class ClienteDAO
{
    public static function sqlInsert($cliente)
    {
        $cc = BD::getInstancia();
        $stSql = "INSERT INTO cliente VALUES ";
        $stSql .= "(:id_cliente, :rut, :nombres, :apellidos, :fechaNac, :id_comuna, :telefono, :correo, :activo)";
        $rs = $cc->db->prepare($stSql);

        $params = self::getParams($cliente);

        return $rs->execute($params);
    }

    public static function sqlSelect($id_cliente)
    {
        $cc = BD::getInstancia();
        $stSql = "SELECT * FROM cliente WHERE id_cliente=:id_cliente";
        $rs = $cc->db->prepare($stSql);
        $rs->execute(array('id_cliente' => $id_cliente));
        $ca = $rs->fetch(); // ca: cliente array

        $nuevocliente = new Cliente();
        $nuevocliente->setIdCliente($ca['id_cliente']);
        $nuevocliente->setRut($ca['rut_cliente']);
        $nuevocliente->setNombres($ca['nombres']);
        $nuevocliente->setApellidos($ca['apellidos']);
        $nuevocliente->setFechaNacimiento($ca['fecha_nacimiento']);
        $nuevocliente->setIdComuna($ca['id_comuna']);
        $nuevocliente->setCorreo($ca['correo']);
        $nuevocliente->setActivo($ca['activo']);

        return $nuevocliente;
    }

    public static function sqlSelectAll()
    {
        $cc = BD::getInstancia();
        $stSql = "SELECT * FROM cliente";
        $rs = $cc->db->prepare($stSql);
        $rs->execute();
        $clientesArray = $rs->fetchAll();
        return $clientesArray;
    }

    public static function sqlUpdate($cliente)
    {
        $cc = BD::getInstancia();

        $stSql = "UPDATE cliente SET rut_cliente=:rut_cliente"
            . ",nombres=:nombres"
            . ",apellidos=:apellidos"
            . ",fecha_nacimiento=:fecha_nacimiento"
            . ",id_comuna=:id_comuna"
            . ",correo=:correo"
            . ",activo=:activo"
            . " WHERE id_cliente=:id_cliente";
        $rs = $cc->db->prepare($stSql);
        $params = self::getParams($cliente);
        return $rs->execute($params);
    }

    public static function sqlDelete($cliente)
    {
        $cc = BD::getInstancia();
        $stSql = "DELETE FROM cliente WHERE id_cliente=:id_cliente";
        $rs = $cc->db->prepare($stSql);
        $rs->execute(array("id_cliente" => $cliente->getIdcliente() ));
    }

    public static function getParams($cliente)
    {
        $params = array();
        $params['id_cliente'] = $cliente->getIdCliente();
        $params['rut'] = $cliente->getRut();
        $params['nombres'] = $cliente->getNombres();
        $params['apellidos'] = $cliente->getApellidos();
        $params['fechaNac'] = $cliente->getFechaNacimiento();
        $params['id_comuna'] = $cliente->getIdComuna();
        $params['telefono'] = $cliente->getTelefono();
        $params['correo'] = $cliente->getCorreo();
        $params['activo'] = $cliente->getActivo();
        return $params;
    }

}
