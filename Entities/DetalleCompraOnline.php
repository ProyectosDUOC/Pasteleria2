<?php

class DetalleCompraOnline {
    private $idDetalleOnline;  
    private $idCompraOnline;   
    private $idProductoP;      
    private $precio;              
    private $cant;                
    private $total;   
    
    function __construct($idDetalleOnline, $idCompraOnline, $idProductoP, $precio, $cant, $total) {
        $this->idDetalleOnline = $idDetalleOnline;
        $this->idCompraOnline = $idCompraOnline;
        $this->idProductoP = $idProductoP;
        $this->precio = $precio;
        $this->cant = $cant;
        $this->total = $total;
    }
    function getIdDetalleOnline() {
        return $this->idDetalleOnline;
    }

    function getIdCompraOnline() {
        return $this->idCompraOnline;
    }

    function getIdProductoP() {
        return $this->idProductoP;
    }

    function getPrecio() {
        return $this->precio;
    }

    function getCant() {
        return $this->cant;
    }

    function getTotal() {
        return $this->total;
    }

    function setIdDetalleOnline($idDetalleOnline) {
        $this->idDetalleOnline = $idDetalleOnline;
    }

    function setIdCompraOnline($idCompraOnline) {
        $this->idCompraOnline = $idCompraOnline;
    }

    function setIdProductoP($idProductoP) {
        $this->idProductoP = $idProductoP;
    }

    function setPrecio($precio) {
        $this->precio = $precio;
    }

    function setCant($cant) {
        $this->cant = $cant;
    }

    function setTotal($total) {
        $this->total = $total;
    }


}

?>