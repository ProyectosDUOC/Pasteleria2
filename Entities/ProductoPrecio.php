<?php
class ProductoPrecio {
    /*
     CREATE TABLE producto_precio (
    id_producto_p   INTEGER NOT NULL,
    id_producto     INTEGER NOT NULL,
    descripcion     VARCHAR(40) NOT NULL,
    precio          INTEGER NOT NULL
    );  */
    
    private $idProductoP;
    private $idProducto;
    private $descripcion;
    private $precio;
    
    public function __construct($idProductoP=0, $idProducto=0, $descripcion=null, $precio=0) {
        $this->idProductoP = $idProductoP;
        $this->idProducto = $idProducto;
        $this->descripcion = $descripcion;
        $this->precio = $precio;
    }
    public function getIdProductoP() {
        return $this->idProductoP;
    }

    public function getIdProducto() {
        return $this->idProducto;
    }

    public function getDescripcion() {
        return $this->descripcion;
    }

    public function getPrecio() {
        return $this->precio;
    }

    public function setIdProductoP($idProductoP) {
        $this->idProductoP = $idProductoP;
    }

    public function setIdProducto($idProducto) {
        $this->idProducto = $idProducto;
    }

    public function setDescripcion($descripcion) {
        $this->descripcion = $descripcion;
    }

    public function setPrecio($precio) {
        $this->precio = $precio;
    }

    public function __toString() {
        return "ProdPrecio=".$this->idProductoP.",".$this->descripcion.",".$this->precio;
    }

}

?>