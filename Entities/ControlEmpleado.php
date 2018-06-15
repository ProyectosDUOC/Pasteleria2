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

    

    public function __construct($idControlE, $idEmpleado, $usuario, $clave, $idTipo, $activo) {
        $this->idControlE = $idControlE;
        $this->idEmpleado = $idEmpleado;
        $this->usuario = $usuario;
        $this->clave = $clave;
        $this->idTipo = $idTipo;
        $this->activo = $activo;
    }
    public function getIdControlE() {
        return $this->idControlE;
    }

    public function getIdEmpleado() {
        return $this->idEmpleado;
    }

    public function getUsuario() {
        return $this->usuario;
    }

    public function getClave() {
        return $this->clave;
    }

    public function getIdTipo() {
        return $this->idTipo;
    }

    public function getActivo() {
        return $this->activo;
    }

    public function setIdControlE($idControlE) {
        $this->idControlE = $idControlE;
    }

    public function setIdEmpleado($idEmpleado) {
        $this->idEmpleado = $idEmpleado;
    }

    public function setUsuario($usuario) {
        $this->usuario = $usuario;
    }

    public function setClave($clave) {
        $this->clave = $clave;
    }

    public function setIdTipo($idTipo) {
        $this->idTipo = $idTipo;
    }

    public function setActivo($activo) {
        $this->activo = $activo;
    }


}

?>