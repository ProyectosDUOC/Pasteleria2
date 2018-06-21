<?php

class Empleado {
    private $idEmpleado;        
    private $rutEmpleado;       
    private $nombres;            
    private $apellidos;          
    private $fechaNacimiento;   
    private $idComuna;         
    private $telefono;   
    private $correo;     
    private $activo;
    
    function __construct($idEmpleado, $rutEmpleado, $nombres, $apellidos, $fechaNacimiento, $telefono, $idComuna, $correo, $activo) {
        $this->idEmpleado = $idEmpleado;
        $this->rutEmpleado = $rutEmpleado;
        $this->nombres = $nombres;
        $this->apellidos = $apellidos;
        $this->fechaNacimiento = $fechaNacimiento;
        $this->idComuna = $idComuna;
        $this->telefono = $telefono;
        $this->correo = $correo;
        $this->activo = $activo;
    }
    
    function getIdEmpleado() {
        return $this->idEmpleado;
    }

    function getRutEmpleado() {
        return $this->rutEmpleado;
    }

    function getNombres() {
        return $this->nombres;
    }

    function getApellidos() {
        return $this->apellidos;
    }

    function getFechaNacimiento() {
        return $this->fechaNacimiento;
    }

    function getIdComuna() {
        return $this->idComuna;
    }

    function getTelefono() {
        return $this->telefono;
    }

    function getCorreo() {
        return $this->correo;
    }

    function getActivo() {
        return $this->activo;
    }

    function setIdEmpleado($idEmpleado) {
        $this->idEmpleado = $idEmpleado;
    }

    function setRutEmpleado($rutEmpleado) {
        $this->rutEmpleado = $rutEmpleado;
    }

    function setNombres($nombres) {
        $this->nombres = $nombres;
    }

    function setApellidos($apellidos) {
        $this->apellidos = $apellidos;
    }

    function setFechaNacimiento($fechaNacimiento) {
        $this->fechaNacimiento = $fechaNacimiento;
    }

    function setIdComuna($idComuna) {
        $this->idComuna = $idComuna;
    }

    function setTelefono($telefono) {
        $this->telefono = $telefono;
    }

    function setCorreo($correo) {
        $this->correo = $correo;
    }

    function setActivo($activo) {
        $this->activo = $activo;
    }


}

?>