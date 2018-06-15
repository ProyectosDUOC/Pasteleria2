<?php

class Boleta {    
    /*  CREATE TABLE boleta (
    id_boleta         INTEGER NOT NULL,
    total             INTEGER,
    id_empleado       INTEGER NOT NULL,
    id_forma_pago     INTEGER NOT NULL,
    id_sucursal       INTEGER NOT NULL,
    id_pedido_local   INTEGER
    );   */

    private $idBoleta;
    private $total;
    private $idEmpleado;
    private $idFormaPago;
    private $idSucursal;
    private $idPedidoLocal;
    
    public function __construct($idBoleta, $total=0, $idEmpleado=0, $idFormaPago=0, $idSucursal=0, $idPedidoLocal=0) {
        $this->idBoleta = $idBoleta;
        $this->total = $total;
        $this->idEmpleado = $idEmpleado;
        $this->idFormaPago = $idFormaPago;
        $this->idSucursal = $idSucursal;
        $this->idPedidoLocal = $idPedidoLocal;
    }
    public function getIdBoleta() {
        return $this->idBoleta;
    }
    public function getTotal() {
        return $this->total;
    }
    public function getIdEmpleado() {
        return $this->idEmpleado;
    }
    public function getIdFormaPago() {
        return $this->idFormaPago;
    }
    public function getIdSucursal() {
        return $this->idSucursal;
    }
    public function getIdPedidoLocal() {
        return $this->idPedidoLocal;
    }

    function setIdBoleta($idBoleta) {
        $this->idBoleta = $idBoleta;
    }
    public function setTotal($total) {
        $this->total = $total;
    }
    public function setIdEmpleado($idEmpleado) {
        $this->idEmpleado = $idEmpleado;
    }
    public function setIdFormaPago($idFormaPago) {
        $this->idFormaPago = $idFormaPago;
    }
    public function setIdSucursal($idSucursal) {
        $this->idSucursal = $idSucursal;
    }
    public function setIdPedidoLocal($idPedidoLocal) {
        $this->idPedidoLocal = $idPedidoLocal;
    }
    
    public function __toString(){
        return print_r($this,true);
    }

}

?>
