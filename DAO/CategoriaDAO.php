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

    public static function sqlSelect($id_categoria){
        $cc = BD::getInstancia();
        $stSql = "SELECT * FROM categoria WHERE id_categoria=:id_categoria";
        $rs = $cc->db->prepare($stSql);
        $rs->execute(array('id_categoria' => $id_categoria));
        $ca = $rs->fetch();
        $nuevaCategoria = new Categoria($ca['id_categoria'],$ca['nombre_cate'],$ca['activo']);
        return $nuevaCategoria;
    }

    public static function sqlInsert($categoria)
    {
        $cc=BD::getInstancia();
        $stSql = "INSERT INTO categoria VALUES (:id_cate, :nombre_cate, :activo)";
        $rs = $cc->db->prepare($stSql);
        $params = getParams($categoria);
        return $rs->sqlEjecutar($stSql);
    }
    
    public static function sqlUpdate($categoria)
    {
        $cc=BD::getInstancia();
        $stSql = "UPDATE categoria SET nombre_cate=:nombre_cate, activo=:activo WHERE id_cate";
        $rs = $cc->db->prepare($stSql);
        $params = self::getParams($categoria);
        return BD::getInstance()->sqlEjecutar($stSql);
    }
    
    public static function sqlDelete($categoria)
    {
        $cc=BD::getInstancia();
        $stSql = "DELETE FROM categoria WHERE id_cate=:id_cate";
        $rs = $cc->db->prepare($stSql);
        $rs->execute(array("id_cate"=>$categoria->getIdcategoria()));
    }

    public static function getParams($categoria)
    {
        $params = array();
        $params['id_cate'] = $categoria->getIdCate();
        $params['nombre_cate'] = $categoria->getNombreCate();
        $params['activo'] = $categoria->getActivo();
        return $params;
    }
}
