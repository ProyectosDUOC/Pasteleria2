<?php
/*
CREATE TABLE control_cliente (
    id_control_c   INTEGER NOT NULL PRIMARY KEY,
    id_cliente     INTEGER NOT NULL,
    usuario        VARCHAR(30) NOT NULL,
    clave          VARCHAR(30) NOT NULL,
    activo         INTEGER NOT NULL
);
*/

class ControlCliente {
    private $idControlC;  
    private $idCliente;    
    private $usuario;        
    private $clave;          
    private $activo; 
    
    public function __construct($idControlC, $idCliente, $usuario, $clave, $activo) {
        $this->idControlC = $idControlC;
        $this->idCliente = $idCliente;
        $this->usuario = $usuario;
        $this->clave = $clave;
        $this->activo = $activo;
    }
    public function getIdControlC() {
        return $this->idControlC;
    }

    public function getIdCliente() {
        return $this->idCliente;
    }

    public function getUsuario() {
        return $this->usuario;
    }

    public function getClave() {
        return $this->clave;
    }

    public function getActivo() {
        return $this->activo;
    }

    public function setIdControlC($idControlC) {
        $this->idControlC = $idControlC;
    }

    public function setIdCliente($idCliente) {
        $this->idCliente = $idCliente;
    }

    public function setUsuario($usuario) {
        $this->usuario = $usuario;
    }

    public function setClave($clave) {
        $this->clave = $clave;
    }

    public function setActivo($activo) {
        $this->activo = $activo;
    }




}

?>