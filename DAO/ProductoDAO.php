<?php

// Declaramos una variable $rootDir si es que no existe
// isset==> si existe o no una variable
if (!isset($rootDir))
    $rootDir = $_SERVER['DOCUMENT_ROOT'];


require_once("../Entities/Producto.php");
require_once("../BD/bd.php");

class ProductoDAO {

    public static function sqlInsert($producto)
    {
        $cc = BD::getInstancia();
        $stSql = "INSERT INTO producto VALUES ";
        $stSql .= "(:id_producto, :cod_producto, :nombre_producto, :imagen, :tamano, :activo, :id_cate)";
        $rs = $cc->db->prepare($stSql);

        $params = self::getParams($producto);

        return $rs->execute($params);
    }

    public static function sqlSelect($id_producto)
    {
        $cc = BD::getInstancia();
        $stSql = "SELECT * FROM producto WHERE id_producto=:id_producto";
        $rs = $cc->db->prepare($stSql);
        $rs->execute(array('id_producto' => $id_producto));
        $pa = $rs->fetch(); // pa: producto array

        $nuevoProducto = new Producto();
        $nuevoProducto->setIdProducto($pa['id_producto']);
        $nuevoProducto->setCodProducto($pa['cod_producto']);
        $nuevoProducto->setNombreProducto($pa['nombre_producto']);
        $nuevoProducto->setImagen($pa['imagen']);
        $nuevoProducto->setTamaño($pa['tamano']);
        $nuevoProducto->setActivo($pa['activo']);
        $nuevoProducto->setIdCate($pa['id_cate']);

        return $nuevoProducto;
    }

    public static function sqlSelectAll()
    {
        $cc = BD::getInstancia();
        $stSql = "SELECT * FROM producto";
        $rs = $cc->db->prepare($stSql);
        $rs->execute();
        $clientesArray = $rs->fetchAll();
        return $clientesArray;
    }

    public static function sqlUpdate($producto)
    {
        $cc = BD::getInstancia();

        $stSql = "UPDATE producto SET cod_producto=:cod_producto"
            . ",nombre_producto=:nombre_producto"
            . ",imagen=imagen"
            . ",tamano=:tamano"
            . ",activo=:activo"
            . ",id_cate=:id_cate"
            . " WHERE id_producto=:id_producto";
        $rs = $cc->db->prepare($stSql);
        $params = self::getParams($producto);
        return $rs->execute($params);
    }

    public static function sqlDelete($producto)
    {
        $cc = BD::getInstancia();
        $stSql = "DELETE FROM producto WHERE id_producto=:id_producto";
        $rs = $cc->db->prepare($stSql);
        $rs->execute(array("id_producto" => $producto->getIdProducto() ));
    }

    public static function getParams($producto)
    {
        $params = array();
        $params['id_producto'] = $producto->getIdProducto();
        $params['cod_producto'] = $producto->getCodProducto();
        $params['nombre_producto'] = $producto->getNombreProducto();
        $params['imagen'] = $producto->getImagen();
        $params['tamano'] = $producto->getTamaño();
        $params['activo'] = $producto->getActivo();
        $params['id_cate'] = $producto->getIdCate();
        return $params;
    }
}
?>