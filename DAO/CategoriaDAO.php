<?php
// Declaramos una variable $rootDir si es que no existe
// isset==> si existe o no una variable
if (!isset($rootDir)) {
    $rootDir = $_SERVER['DOCUMENT_ROOT'];
}

//Agregamos desde BD.PHPy la Entitie Actor
// desde el Path raiz ==> $rootDir
require_once $rootDir . "/BDD/bd.php";
require_once $rootDir . "/modelo/Categoria.php";
class CategoriaDAO
{
    // Métodos de nuestra Dao
    // Insert,Update, Delete, Select, Select All

    public static function sqlInsert($categoria)
    {
        $cc=BD::getInstancia();

        $stSql = "INSERT INTO categoria VALUES (:id_cate, :nombre_cate, :activo)";
        $rs = $cc->db->prepare($stSql);
        $params = getParams($categoria);
        return BD::getInstance()->sqlEjecutar($stSql);
    }
    
    public static function sqlUpdate($categoria)
    {
        $stSql = "update categoria SET ";
        $stSql .= " id_cate='{$categoria->getIdCategoria()}'"
            . ",nombre_cate='{$categoria->getNombreCategoria()}'"
            . ",activo='{$categoria->getActivo()}'"
        ;
        $stSql .= " Where  id_cate='{$categoria->getIdCategoria()}'"
        ;
        return BD::getInstance()->sqlEjecutar($stSql);
    }
    
    public static function sqlDelete($categoria)
    {
        $stSql = "delete from  categoria ";
        $stSql .= " Where  id_cate='{$categoria->getIdCategoria()}'"
        ;
        return BD::getInstance()->sqlEjecutar($stSql);
    }
}
