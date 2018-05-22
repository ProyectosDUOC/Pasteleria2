<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ControlEmpleado
 *
 * @author benja
 */
class ControlEmpleado {
    private $idControlE;  
    private $idEmpleado;    
    private $usuario;        
    private $clave; 
    private $idTipo;
    private $activo; 
    
    function __construct($idControlE, $idEmpleado, $usuario, $clave, $idTipo, $activo) {
        $this->idControlE = $idControlE;
        $this->idEmpleado = $idEmpleado;
        $this->usuario = $usuario;
        $this->clave = $clave;
        $this->idTipo = $idTipo;
        $this->activo = $activo;
    }
    function getIdControlE() {
        return $this->idControlE;
    }

    function getIdEmpleado() {
        return $this->idEmpleado;
    }

    function getUsuario() {
        return $this->usuario;
    }

    function getClave() {
        return $this->clave;
    }

    function getIdTipo() {
        return $this->idTipo;
    }

    function getActivo() {
        return $this->activo;
    }

    function setIdControlE($idControlE) {
        $this->idControlE = $idControlE;
    }

    function setIdEmpleado($idEmpleado) {
        $this->idEmpleado = $idEmpleado;
    }

    function setUsuario($usuario) {
        $this->usuario = $usuario;
    }

    function setClave($clave) {
        $this->clave = $clave;
    }

    function setIdTipo($idTipo) {
        $this->idTipo = $idTipo;
    }

    function setActivo($activo) {
        $this->activo = $activo;
    }


}

?>