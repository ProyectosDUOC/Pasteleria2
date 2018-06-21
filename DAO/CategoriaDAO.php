<?php
// Declaramos una variable $rootDir si es que no existe
// isset==> si existe o no una variable
if (!isset($rootDir)) {
    $rootDir = $_SERVER['DOCUMENT_ROOT'];
}

//Agregamos desde BD.PHPy la Entitie Actor
// desde el Path raiz ==> $rootDir
require_once ($rootDir . "/BD/bd.php");
require_once ($rootDir . "/Entities/Categoria.php");
class CategoriaDAO
{
    // Métodos de nuestra Dao
    // Insert,Update, Delete, Select, Select All

    public static function sqlSelect($id_categoria){
        $cc = BD::getInstancia();
        $stSql = "SELECT * FROM categoria WHERE id_cate=:id_cate";
        $rs = $cc->db->prepare($stSql);
        $rs->execute(array('id_cate' => $id_categoria));
        $ca = $rs->fetch();
        $nuevaCategoria = new Categoria($ca['id_cate'],$ca['nombre_cate'],$ca['activo']);
        return $nuevaCategoria;
    }

    public static function sqlInsert($categoria)
    {
        $cc=BD::getInstancia();
        $stSql = "INSERT INTO categoria VALUES (:id_cate, :nombre_cate, :activo)";
        $rs = $cc->db->prepare($stSql);
        $params = self::getParams($categoria);
        return $rs->execute($params);
    }

    public static function lastValue(){
        $cc = BD::getInstancia();
        $stSql = "SELECT * FROM categoria order by id_cate desc  limit 1";
        $rs = $cc->db->prepare($stSql);
        $rs->execute();
        $ba = $rs->fetch();
        $cate = new Categoria($ba['id_cate'],
                                      $ba['nombre_cate'],
                                      $ba['activo'] );
        return $cate;        
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

    public static function sqlSelectAll()
    {
        $cc = BD::getInstancia();
        $stSql = "SELECT * FROM categoria";
        $rs = $cc->db->prepare($stSql);
        $rs->execute();
        $productos = $rs->fetchAll();
        $pila = array();
        foreach ($productos as $c) {
            $actorAux = new Categoria($c['id_cate'],
                                            $c['nombre_cate'],
                                            $c['activo']);
            array_push($pila, $actorAux); 
        }
        return $pila;
    }

}
