<?php
class CompraOnline {
    /* CREATE TABLE compra_online (
    id_compra_online   INTEGER NOT NULL,
    id_cliente         INTEGER NOT NULL,
    descuento          INTEGER,
    total              INTEGER,
    glosa              VARCHAR(300),
    id_forma_envio     INTEGER NOT NULL,
    id_forma_pago      INTEGER NOT NULL,
    id_sucursal        INTEGER NOT NULL
    ); */
    
    private $idCompraOnline;
    private $idCliente;
    private $descuento;
    private $total;
    private $glosa;
    private $idFormaEnvio;
    private $idFormaPago;
    private $idSucursal;
    
    public function __construct($idCompraOnline, $idCliente, $descuento, $total, $glosa, $idFormaEnvio, $idFormaPago, $idSucursal) {
        $this->idCompraOnline = $idCompraOnline;
        $this->idCliente = $idCliente;
        $this->descuento = $descuento;
        $this->total = $total;
        $this->glosa = $glosa;
        $this->idFormaEnvio = $idFormaEnvio;
        $this->idFormaPago = $idFormaPago;
        $this->idSucursal = $idSucursal;
    }
    
    public function getIdCompraOnline() {
        return $this->idCompraOnline;
    }
    public function getIdCliente() {
        return $this->idCliente;
    }
    public function getDescuento() {
        return $this->descuento;
    }
    public function getTotal() {
        return $this->total;
    }
    public function getGlosa() {
        return $this->glosa;
    }
    public function getIdFormaEnvio() {
        return $this->idFormaEnvio;
    }
    public function getIdFormaPago() {
        return $this->idFormaPago;
    }
    public function getIdSucursal() {
        return $this->idSucursal;
    }

    public function setIdCompraOnline($idCompraOnline) {
        $this->idCompraOnline = $idCompraOnline;
    }
    public function setIdCliente($idCliente) {
        $this->idCliente = $idCliente;
    }
    public function setDescuento($descuento) {
        $this->descuento = $descuento;
    }
    public function setTotal($total) {
        $this->total = $total;
    }
    public function setGlosa($glosa) {
        $this->glosa = $glosa;
    }
    public function setIdFormaEnvio($idFormaEnvio) {
        $this->idFormaEnvio = $idFormaEnvio;
    }
    public function setIdFormaPago($idFormaPago) {
        $this->idFormaPago = $idFormaPago;
    }
    public function setIdSucursal($idSucursal) {
        $this->idSucursal = $idSucursal;
    }    
}
