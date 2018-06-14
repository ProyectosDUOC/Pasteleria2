<?php

class DetalleCompraOnline {
    private $idDetalleOnline;  
    private $idCompraOnline;   
    private $idProductoP;      
    private $precio;              
    private $cant;                
    private $total;   
    
    public function __construct($idDetalleOnline, $idCompraOnline, $idProductoP, $precio, $cant, $total) {
        $this->idDetalleOnline = $idDetalleOnline;
        $this->idCompraOnline = $idCompraOnline;
        $this->idProductoP = $idProductoP;
        $this->precio = $precio;
        $this->cant = $cant;
        $this->total = $total;
    }
    public function getIdDetalleOnline() {
        return $this->idDetalleOnline;
    }

    public function getIdCompraOnline() {
        return $this->idCompraOnline;
    }

    public function getIdProductoP() {
        return $this->idProductoP;
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

    public function setIdDetalleOnline($idDetalleOnline) {
        $this->idDetalleOnline = $idDetalleOnline;
    }

    public function setIdCompraOnline($idCompraOnline) {
        $this->idCompraOnline = $idCompraOnline;
    }

    public function setIdProductoP($idProductoP) {
        $this->idProductoP = $idProductoP;
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

?>