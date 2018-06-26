<?php
class PedidoLocal {
    /* CREATE TABLE pedido_local (
    id_pedido_local   INTEGER NOT NULL,
    id_cliente        INTEGER NOT NULL,
    glosa             VARCHAR(300),
    descuento         INTEGER,
    total             INTEGER,
    fecha_termino     DATETIME,
    fecha_inscrita    DATETIME,
    id_forma_envio    INTEGER NOT NULL,
    id_sucursal       INTEGER NOT NULL
    );     */   
     
    private $idPedidoLocal;
    private $idCliente;
    private $glosa;
    private $descuento;
    private $total;
    private $fechaTermino;
    private $fechaInscrita;
    private $idFormaEnvio;
    private $idSucursal;
    
    public function __construct($idPedidoLocal=0, $idCliente=0, $glosa="", $descuento=0, $total=0, $fechaTermino=null, $fechaInscrita=null, $idFormaEnvio=0, $idSucursal=1) {
        $this->idPedidoLocal = $idPedidoLocal;
        $this->idCliente = $idCliente;
        $this->glosa = $glosa;
        $this->descuento = $descuento;
        $this->total = $total;
        $this->fechaTermino = $fechaTermino;
        $this->fechaInscrita = $fechaInscrita;
        $this->idFormaEnvio = $idFormaEnvio;
        $this->idSucursal = $idSucursal;
    }
    
    public function getIdPedidoLocal() {
        return $this->idPedidoLocal;
    }

    public function getIdCliente() {
        return $this->idCliente;
    }

    public function getGlosa() {
        return $this->glosa;
    }

    public function getDescuento() {
        return $this->descuento;
    }

    public function getTotal() {
        return $this->total;
    }

    public function getFechaTermino() {
        return $this->fechaTermino;
    }

    public function getFechaInscrita() {
        return $this->fechaInscrita;
    }

    public function getIdFormaEnvio() {
        return $this->idFormaEnvio;
    }

    public function getIdSucursal() {
        return $this->idSucursal;
    }

    public function setIdPedidoLocal($idPedidoLocal) {
        $this->idPedidoLocal = $idPedidoLocal;
    }

    public function setIdCliente($idCliente) {
        $this->idCliente = $idCliente;
    }

    public function setGlosa($glosa) {
        $this->glosa = $glosa;
    }

    public function setDescuento($descuento) {
        $this->descuento = $descuento;
    }

    public function setTotal($total) {
        $this->total = $total;
    }

    public function setFechaTermino($fechaTermino) {
        $this->fechaTermino = $fechaTermino;
    }

    public function setFechaInscrita($fechaInscrita) {
        $this->fechaInscrita = $fechaInscrita;
    }

    public function setIdFormaEnvio($idFormaEnvio) {
        $this->idFormaEnvio = $idFormaEnvio;
    }

    public function setIdSucursal($idSucursal) {
        $this->idSucursal = $idSucursal;
    }    
}
