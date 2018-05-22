<?php

class TipoUsuario {
   private $idTipo;
   private $nombreTipo;
   
   function __construct($idTipo, $nombreTipo) {
       $this->idTipo = $idTipo;
       $this->nombreTipo = $nombreTipo;
   }
   
   function getIdTipo() {
       return $this->idTipo;
   }

   function getNombreTipo() {
       return $this->nombreTipo;
   }

   function setIdTipo($idTipo) {
       $this->idTipo = $idTipo;
   }

   function setNombreTipo($nombreTipo) {
       $this->nombreTipo = $nombreTipo;
   }
}
?>