<?php
// Declaramos una variable $rootDir si es que no existe
// isset==> si existe o no una variable
if (!isset($rootDir)) {
    $rootDir = $_SERVER['DOCUMENT_ROOT'];
}

//Agregamos desde BD.PHPy la Entitie Actor
// desde el Path raiz ==> $rootDir
require_once $rootDir . "/BD/bd.php";
require_once $rootDir . "/Entities/DetalleBoleta.php";

class CategoriaDAO
{
    // Métodos de nuestra Dao
    // Insert,Update, Delete, Select, Select All

    /*  CREATE TABLE direcion_cliente (
    id_direccion  INT NOT NULL AUTO_INCREMENT,
    id_cliente  INT,
    nombres    VARCHAR(50),
    apellidos     VARCHAR(50),
    informacion VARCHAR(50),
    zip VARCHAR(50),
    id_comuna  INTEGER,
    celular  INT,
    telefono  INT,
    PRIMARY KEY(id_direccion)
    );  */

    public static function sqlInsert($direccion){
        $cc = BD::getInstancia();
        $stSql = "INSERT INTO direccion_cliente VALUES ";
        $stSql .= "(:id_direccion,:id_cliente, :nombres, :apellidos, :informacion, :zip, :id_comuna, :direccion, :celular, :telefono)";
        $rs = $cc->db->prepare($stSql);

        $params = self::getParams($direccion);

        return $rs->execute($params);
    }

    public static function sqlSelect($id_direccion)
    {
        $cc = BD::getInstancia();
        $stSql = "SELECT * FROM direccion_cliente WHERE id_direccion=:id_direccion";
        $rs = $cc->db->prepare($stSql);
        $rs->execute(array('id_direccion' => $id_direccion));
        $darr = $rs->fetch(); // darr: direccion array

        $nuevaDireccion = new DireccionCliente();
        $nuevaDireccion->setIdDireccion($darr['id_direccion']);
        $nuevaDireccion->setIdCliente($darr['id_cliente']);
        $nuevaDireccion->setNombres($darr['nombres']);
        $nuevaDireccion->setApellidos($darr['apellidos']);
        $nuevaDireccion->setInformacion($darr['informacion']);
        $nuevaDireccion->setZip($darr['zip']);
        $nuevaDireccion->setIdComuna($darr['id_comuna']);
        $nuevaDireccion->setDireccion($darr['direccion']);
        $nuevaDireccion->setTelefono($darr['celular']);
        $nuevaDireccion->setCelular($darr['telefono']);

        return $nuevaDireccion;
    }

    public static function sqlSelectAll()
    {
        $cc = BD::getInstancia();
        $stSql = "SELECT * FROM direccion_cliente";
        $rs = $cc->db->prepare($stSql);
        $rs->execute();
        $direccionesArray = $rs->fetchAll();
        return $direccionesArray;
    }

    public static function sqlUpdate($direccion)
    {
        $cc = BD::getInstancia();

        $stSql = "UPDATE direccion SET id_cliente=:id_cliente"
            . ",nombres=:nombres"
            . ",apellidos=:apellidos"
            . ",informacion=informacion"
            . ",zip=:zip"
            . ",id_comuna=:id_comuna"
            . ",direccion=:direccion"
            . ",celular=:celular"
            . ",telefono=:telefono"
            . " WHERE id_direccion=:id_direccion";
        $rs = $cc->db->prepare($stSql);
        $params = self::getParams($direccion);
        return $rs->execute($params);
    }

    public static function sqlDelete($direccion)
    {
        $cc = BD::getInstancia();
        $stSql = "DELETE FROM direccion_cliente WHERE id_direccion=:id_direccion";
        $rs = $cc->db->prepare($stSql);
        $rs->execute(array("id_direccion" => $direccion->getIdDireccion() ));
    }

    public static function getParams($direccion)
    {
        $params = array();
        $params['id_direccion'] = $direccion->getIdCliente();
        $params['id_cliente'] = $direccion->getIdCliente();
        $params['nombres'] = $direccion->getNombres();
        $params['apellidos'] = $direccion->getApellidos();
        $params['informacion'] = $direccion->getInformacion();
        $params['zip'] = $direccion->getZip();
        $params['id_comuna'] = $direccion->getIdComuna();
        $params['direccion'] = $direccion->getDireccion();
        $params['telefono'] = $direccion->getTelefono();
        $params['celular'] = $direccion->getCelular();
        return $params;
    }

}
