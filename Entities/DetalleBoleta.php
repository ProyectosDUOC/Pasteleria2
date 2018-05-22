<?php

class DetalleBoleta {
    /* CREATE TABLE detalle_boleta (
    id_detalle      INTEGER NOT NULL,
    id_producto_p   INTEGER NOT NULL,
    id_boleta       INTEGER NOT NULL,
    precio          INTEGER,
    cant            INTEGER,
    total           INTEGER
    );     */
    
    private $idDetalle;
    private $idProductoP;
    private $idBoleta;
    private $precio;
    private $cant;
    private $total;
    
    public function __construct($idDetalle, $idProductoP, $idBoleta, $precio, $cant, $total) {
        $this->idDetalle = $idDetalle;
        $this->idProductoP = $idProductoP;
        $this->idBoleta = $idBoleta;
        $this->precio = $precio;
        $this->cant = $cant;
        $this->total = $total;
    }
    function getIdDetalle() {
        return $this->idDetalle;
    }
    public function getIdProductoP() {
        return $this->idProductoP;
    }
    public function getIdBoleta() {
        return $this->idBoleta;
    }
    public function getPrecio() {
        return $this->precio;
    }
    public function getCant() {
        return $this->cant;
    }
    public function getTotal() {
        return $this->total;
    }
    function setIdDetalle($idDetalle) {
        $this->idDetalle = $idDetalle;
    }
    public function setIdProductoP($idProductoP) {
        $this->idProductoP = $idProductoP;
    }
    public function setIdBoleta($idBoleta) {
        $this->idBoleta = $idBoleta;
    }
    public function setPrecio($precio) {
        $this->precio = $precio;
    }
    public function setCant($cant) {
        $this->cant = $cant;
    }
    public function setTotal($total) {
        $this->total = $total;
    }
}
