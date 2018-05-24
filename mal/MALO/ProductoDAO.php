<?php

    if (!isset($rootDir)) $rootDir = $_SERVER['DOCUMENT_ROOT'];

    require_once($rootDir . "/bd.php");
    require_once($rootDir . "/Producto.php");
    
    class ProductoDAO {
        public static function sqlInsert($producto){
        $stSql  = "insert into producto(";
        $stSql .= "id_producto ,nombre_producto ,tamano, imagen, id_categoria, id_precio";
        $stSql .= " )values (";
        $stSql .=  "'{$producto->getId()}'"
                . ",'{$producto->getNombre()}'"
                . ",'{$producto->getTamaño()}'"
                . ",'{$producto->getImagen()}'"
                . ",{$producto->getIdCategoria()}"
                . ",'{$producto->getPrecio()}'"
                . ")";
	    return BD::getInstance()->sqlEjecutar($stSql);
        }
    }
?>