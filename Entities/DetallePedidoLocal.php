<?php
class DetallePedidoLocal {
    /*CREATE TABLE detalle_pedido_local (
    id_detalle_local   INTEGER NOT NULL,
    id_pedido_local    INTEGER NOT NULL,
    id_producto_p      INTEGER NOT NULL,
    precio             INTEGER,
    cant               INTEGER,
    total              INTEGER
    );*/
    
    private $idDetalleLocal;
    private $idPedidoLocal;
    private $idProductoP;
    private $precio;
    private $cant;
    private $total;
    
    public function __construct($idDetalleLocal, $idPedidoLocal, $idProductoP, $precio, $cant, $total) {
        $this->idDetalleLocal = $idDetalleLocal;
        $this->idPedidoLocal = $idPedidoLocal;
        $this->idProductoP = $idProductoP;
        $this->precio = $precio;
        $this->cant = $cant;
        $this->total = $total;
    }
    
    public function getIdDetalleLocal() {
        return $this->idDetalleLocal;
    }

    public function getIdPedidoLocal() {
        return $this->idPedidoLocal;
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

    public function setIdDetalleLocal($idDetalleLocal) {
        $this->idDetalleLocal = $idDetalleLocal;
    }

    public function setIdPedidoLocal($idPedidoLocal) {
        $this->idPedidoLocal = $idPedidoLocal;
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