<?php
// Declaramos una variable $rootDir si es que no existe
// isset==> si existe o no una variable
if (!isset($rootDir)) {
    $rootDir = $_SERVER['DOCUMENT_ROOT'];
}

//Agregamos desde BD.PHPy la Entitie Actor
// desde el Path raiz ==> $rootDir
require_once $rootDir . "/BDD/bd.php";
require_once $rootDir . "/modelo/DetalleBoleta.php";
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
    code_postal VARCHAR(50),
    id_comuna  INTEGER,
    celular  INT,
    telefono  INT,
    PRIMARY KEY(id_direccion)
    );  */

    public static function sqlInsert($dire)
    {
        $stSql = "insert into direccion_cliente (";
        $stSql .= " id_cliente,nombres,apellidos,informacion,code_postal,id_comuna,celular,telefono";
        $stSql .= " )values (";
        $stSql .= " {$dire->getIdCliente()}"
            . ",'{$dire->getNombres()}'"
            . ",'{$dire->getApellidos()}'"
            . ",'{$dire->getInformacion()}'"
            . ",{$dire->getCode()}"
            . ",{$dire->getIdComuna()}"
            . ",{$dire->getCelular()}"
            . ",{$dire->getTelefono()}"
            . ")";
        return BD::getInstance()->sqlEjecutar($stSql);
    }

    public static function sqlUpdate($dire)
    {
        $stSql = "update categoria SET ";
        $stSql .= " id_cate='{$dire->getIdCategoria()}'"
            . ",nombre_cate='{$dire->getNombreCategoria()}'"
            . ",activo='{$dire->getActivo()}'"
        ;
        $stSql .= " Where  id_cate='{$dire->getIdCategoria()}'"
        ;
        return BD::getInstance()->sqlEjecutar($stSql);
    }

    public static function sqlDelete($dire)
    {
        $stSql = "delete from  categoria ";
        $stSql .= " Where  id_cate='{$dire->getIdCategoria()}'"
        ;
        return BD::getInstance()->sqlEjecutar($stSql);
    }
}
