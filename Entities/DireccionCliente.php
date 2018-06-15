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
    
    public function __construct($idDireccion=0, $idCliente=0, $nombres=0, $apellidos=0, $informacion=0, $zip=0, $idComuna=0, $direccion=0, $telefono=0, $celular=0) {
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
    public function getIdDireccion() {
        return $this->idDireccion;
    }

    public function getIdCliente() {
        return $this->idCliente;
    }

    public function getNombres() {
        return $this->nombres;
    }

    public function getApellidos() {
        return $this->apellidos;
    }

    public function getInformacion() {
        return $this->informacion;
    }

    public function getZip() {
        return $this->zip;
    }

    public function getIdComuna() {
        return $this->idComuna;
    }

    public function getDireccion() {
        return $this->direccion;
    }

    public function getTelefono() {
        return $this->telefono;
    }

    public function getCelular() {
        return $this->celular;
    }

    public function setIdDireccion($idDireccion) {
        $this->idDireccion = $idDireccion;
    }

    public function setIdCliente($idCliente) {
        $this->idCliente = $idCliente;
    }

    public function setNombres($nombres) {
        $this->nombres = $nombres;
    }

    public function setApellidos($apellidos) {
        $this->apellidos = $apellidos;
    }

    public function setInformacion($informacion) {
        $this->informacion = $informacion;
    }

    public function setZip($zip) {
        $this->zip = $zip;
    }

    public function setIdComuna($idComuna) {
        $this->idComuna = $idComuna;
    }

    public function setDireccion($direccion) {
        $this->direccion = $direccion;
    }

    public function setTelefono($telefono) {
        $this->telefono = $telefono;
    }

    public function setCelular($celular) {
        $this->celular = $celular;
    }


}

?>