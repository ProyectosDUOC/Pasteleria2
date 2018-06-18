<?php

// Declaramos una variable $rootDir si es que no existe
// isset==> si existe o no una variable


    if (!isset($rootDir)) $rootDir = $_SERVER['DOCUMENT_ROOT'];

    require_once($rootDir . "/BD/bd.php");
    require_once($rootDir . "/Entities/Producto.php");
    

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

    public static function lastValue(){
        $cc = BD::getInstancia();
        $stSql = "SELECT * FROM producto order by id_producto desc  limit 1";
        $rs = $cc->db->prepare($stSql);
        $rs->execute();
        $ba = $rs->fetch();
        $nuevaEmpleado = new Producto($ba['id_producto'],
                                      $ba['cod_producto'],
                                      $ba['nombre_producto'],
                                      $ba['imagen'], 
                                      $ba['tamano'], 
                                      $ba['activo'],
                                      $ba['id_cate'] );
        return $nuevaEmpleado;        
    }

    public static function sqlSelect($id_producto)
    {
        $cc = BD::getInstancia();
        $stSql = "SELECT * FROM producto WHERE id_producto=:id_producto";
        $rs = $cc->db->prepare($stSql);
        $rs->execute(array('id_producto' => $id_producto));
        $pa = $rs->fetch(); // pa: producto array

        $nuevoProducto = new Producto(0,"","","","",1,0);
        $nuevoProducto->setIdProducto($pa['id_producto']);
        $nuevoProducto->setCodProducto($pa['cod_producto']);
        $nuevoProducto->setNombreProducto($pa['nombre_producto']);
        $nuevoProducto->setImagen($pa['imagen']);
        $nuevoProducto->setTamaño($pa['tamano']);
        $nuevoProducto->setActivo($pa['activo']);
        $nuevoProducto->setIdCate($pa['id_cate']);

        return $nuevoProducto;
    }

    public static function readAll()
    {
        $cc = BD::getInstancia();
        $stSql = "SELECT * FROM producto";
        $rs = $cc->db->prepare($stSql);
        $rs->execute();
        $productos = $rs->fetchAll();
        $pila = array();
        foreach ($productos as $c) {
            $actorAux = new Producto($c['id_producto'],
                                            $c['cod_producto'],
                                            $c['nombre_producto'],
                                            $c['imagen'],
                                            $c['tamano'],
                                            $c['activo'],
                                            $c['id_cate']);
            array_push($pila, $actorAux);
        }
        return $pila;
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