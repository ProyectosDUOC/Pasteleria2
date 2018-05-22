<?php
class FormaPago {
    /* CREATE TABLE forma_pago (
    id_forma_pago   INTEGER NOT NULL,
    nombre_pago     VARCHAR(30) NOT NULL
    );  */
    
    private $idFormaPago;
    private $nombrePago;
    
    public function __construct($idFormaPago, $nombrePago) {
        $this->idFormaPago = $idFormaPago;
        $this->nombrePago = $nombrePago;
    }
    
    public function getIdFormaPago() {
        return $this->idFormaPago;
    }

    public function getNombrePago() {
        return $this->nombrePago;
    }

    public function setIdFormaPago($idFormaPago) {
        $this->idFormaPago = $idFormaPago;
    }

    public function setNombrePago($nombrePago) {
        $this->nombrePago = $nombrePago;
    }

}
