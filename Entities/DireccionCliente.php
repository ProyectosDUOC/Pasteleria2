<?php

class DireccionCliente {
    private $idDireccion;
    private $idCliente;    
    private $nombres;        
    private $apellidos;      
    private $informacion;   
    private $zip;            
    private $idComuna;     
    private $direccion;     
    private $telefono;       
    private $celular;
    
    function __construct($idDireccion, $idCliente, $nombres, $apellidos, $informacion, $zip, $idComuna, $direccion, $telefono, $celular) {
        $this->idDireccion = $idDireccion;
        $this->idCliente = $idCliente;
        $this->nombres = $nombres;
        $this->apellidos = $apellidos;
        $this->informacion = $informacion;
        $this->zip = $zip;
        $this->idComuna = $idComuna;
        $this->direccion = $direccion;
        $this->telefono = $telefono;
        $this->celular = $celular;
    }
    function getIdDireccion() {
        return $this->idDireccion;
    }

    function getIdCliente() {
        return $this->idCliente;
    }

    function getNombres() {
        return $this->nombres;
    }

    function getApellidos() {
        return $this->apellidos;
    }

    function getInformacion() {
        return $this->informacion;
    }

    function getZip() {
        return $this->zip;
    }

    function getIdComuna() {
        return $this->idComuna;
    }

    function getDireccion() {
        return $this->direccion;
    }

    function getTelefono() {
        return $this->telefono;
    }

    function getCelular() {
        return $this->celular;
    }

    function setIdDireccion($idDireccion) {
        $this->idDireccion = $idDireccion;
    }

    function setIdCliente($idCliente) {
        $this->idCliente = $idCliente;
    }

    function setNombres($nombres) {
        $this->nombres = $nombres;
    }

    function setApellidos($apellidos) {
        $this->apellidos = $apellidos;
    }

    function setInformacion($informacion) {
        $this->informacion = $informacion;
    }

    function setZip($zip) {
        $this->zip = $zip;
    }

    function setIdComuna($idComuna) {
        $this->idComuna = $idComuna;
    }

    function setDireccion($direccion) {
        $this->direccion = $direccion;
    }

    function setTelefono($telefono) {
        $this->telefono = $telefono;
    }

    function setCelular($celular) {
        $this->celular = $celular;
    }


}

?>