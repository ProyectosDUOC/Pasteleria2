<?php

class ControlCliente {
    private $idControlC;  
    private $idCliente;    
    private $usuario;        
    private $clave;          
    private $activo; 
    
    function __construct($idControlC, $idCliente, $usuario, $clave, $activo) {
        $this->idControlC = $idControlC;
        $this->idCliente = $idCliente;
        $this->usuario = $usuario;
        $this->clave = $clave;
        $this->activo = $activo;
    }
    function getIdControlC() {
        return $this->idControlC;
    }

    function getIdCliente() {
        return $this->idCliente;
    }

    function getUsuario() {
        return $this->usuario;
    }

    function getClave() {
        return $this->clave;
    }

    function getActivo() {
        return $this->activo;
    }

    function setIdControlC($idControlC) {
        $this->idControlC = $idControlC;
    }

    function setIdCliente($idCliente) {
        $this->idCliente = $idCliente;
    }

    function setUsuario($usuario) {
        $this->usuario = $usuario;
    }

    function setClave($clave) {
        $this->clave = $clave;
    }

    function setActivo($activo) {
        $this->activo = $activo;
    }




}

?>