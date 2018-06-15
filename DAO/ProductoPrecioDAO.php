<?php

if (!isset($rootDir))    $rootDir = $_SERVER['DOCUMENT_ROOT'];

require_once($rootDir . "/BD/bd.php");
require_once($rootDir . "/Entities/ProductoPrecio.php");

class ProductoPrecioDAO {

    public static function sqlInsert($productoPrecio)
    {
        $cc = BD::getInstancia();
        $stSql = "INSERT INTO producto_precio VALUES ";
        $stSql .= "(:id_producto_p, :id_producto, :descripcion, :precio)";
        $rs = $cc->db->prepare($stSql);

        $params = self::getParams($productoPrecio);

        return $rs->execute($params);
    }

    public static function sqlSelect($id_producto_p)
    {
        $cc = BD::getInstancia();
        $stSql = "SELECT * FROM producto_precio WHERE id_producto_p=:id_producto_p";
        $rs = $cc->db->prepare($stSql);
        $rs->execute(array('id_producto_p' => $id_producto_p));
        $ppa = $rs->fetch(); // ppa: producto precio array

        $nuevoProductoP = new ProductoPrecio();
        $nuevoProductoP->setIdProductoP($ppa['id_producto_p']);
        $nuevoProductoP->setIdProducto($ppa['id_producto']);
        $nuevoProductoP->setDescripcion($ppa['descripcion']);
        $nuevoProductoP->setPrecio($ppa['precio']);

        return $nuevoProductoP;
    }

    public static function sqlSelectAll()
    {
        $cc = BD::getInstancia();
        $stSql = "SELECT * FROM producto_precio";
        $rs = $cc->db->prepare($stSql);
        $rs->execute();
        $ProductoPArray = $rs->fetchAll();
        return $ProductoPArray;
    }

    public static function idRealAll($id)
    {
        $cc = BD::getInstancia();
        $stSql = "SELECT * FROM producto_precio where id_producto=".$id;
        $rs = $cc->db->prepare($stSql);
        $rs->execute();
        $ProductoPArray = $rs->fetchAll();
        $pila = array();
        foreach ($ProductoPArray as $c) {
            $actorAux = new ProductoPrecio($c['id_producto_p'],
                                            $c['id_producto'],
                                            $c['descripcion'],
                                            $c['precioproducto_precio']);
            array_push($pila, $actorAux);
        }
        return $pila;
    }
   
    public static function sqlUpdate($productoPrecio)
    {
        $cc = BD::getInstancia();

        $stSql = "UPDATE producto_precio SET id_producto=:id_producto"
            . ",descripcion=:descripcion"
            . ",precio=:precio"
            . " WHERE id_producto_p=:id_producto_p";
        $rs = $cc->db->prepare($stSql);
        $params = self::getParams($productoPrecio);
        return $rs->execute($params);
    }

    public static function sqlDelete($productoPrecio)
    {
        $cc = BD::getInstancia();
        $stSql = "DELETE FROM producto_precio WHERE id_producto_p=:id_producto_p";
        $rs = $cc->db->prepare($stSql);
        $rs->execute(array("id_producto_p" => $productoPrecio->getIdProductoP() ));
    }

    public static function getParams($productoPrecio)
    {
        $params = array();
        $params['id_producto_p'] = $productoPrecio->setIdProductoP();
        $params['id_producto'] = $productoPrecio->setIdProducto();
        $params['descripcion'] = $productoPrecio->setDescripcion();
        $params['precio'] = $productoPrecio->setPrecio();
        return $params;
    }
}
?>
