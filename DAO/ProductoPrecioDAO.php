<?php

// Declaramos una variable $rootDir si es que no existe
// isset==> si existe o no una variable
if (!isset($rootDir))
    $rootDir = $_SERVER['DOCUMENT_ROOT'];
//Agregamos desde BD.PHPy la Entitie Boleta
// desde el Path raiz ==> $rootDir
require_once($rootDir . "/BD/bd.php");
require_once($rootDir . "/Entities/ProductoPrecio.php");

class ProductoPrecioDAO {

    /* METODO BUSCAR */

    // Método que ejecuta una sentencia,
    // Sin embargo no retorna ningún registro
    public static function getProductoID($productoPrecio) {
        $stSql = "select id_producto  from  producto_precio ";
        $stSql .= " where id_producto_p={$productoPrecio->getIdProductoP()}";

        $resultado = BD::getInstance()->sqlSelect($stSql);
        if (!$resultado)
            return false;
        return $resultado;
    }

    public static function sqlSelectOneProductoP($productoPrecio) {
        // Crea el Sql utilizando el boletaId de la clase
        $stSql = "select * from producto_precio ";
        $stSql .= " where id_producto_p={$productoPrecio->getIdProductoP()}";

        $fila = BD::getInstance()->sqlFetch($stSql);
        if (!$fila)
            return null;
        // llena los campos que faltan de la instancia 
        $productoPrecio->setIdProducto($fila["id_producto"]);
        $productoPrecio->setDescripcion($fila["descripcion"]);
        $productoPrecio->setPrecio($fila["precio"]);
        // retorna true, ya que resulto la operación
        return true;
    }

    

}
?>
