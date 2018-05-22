<?php
class Sucursal {
    /*CREATE TABLE sucursal (
    id_sucursal       INTEGER NOT NULL,
    nombre_sucursal   VARCHAR(20)
    );*/
    
    private $idSucursal;
    private $nombreSucursal;
    
    public function __construct($idSucursal, $nombreSucursal) {
        $this->idSucursal = $idSucursal;
        $this->nombreSucursal = $nombreSucursal;
    }
    
    public function getIdSucursal() {
        return $this->idSucursal;
    }
    public function getNombreSucursal() {
        return $this->nombreSucursal;
    }

    public function setIdSucursal($idSucursal) {
        $this->idSucursal = $idSucursal;
    }
    public function setNombreSucursal($nombreSucursal) {
        $this->nombreSucursal = $nombreSucursal;
    }
}
 
?>