<?php

class TipoUsuario {
   private $idTipo;
   private $nombreTipo;
   
   public function __construct($idTipo, $nombreTipo) {
       $this->idTipo = $idTipo;
       $this->nombreTipo = $nombreTipo;
   }
   
   public function getIdTipo() {
       return $this->idTipo;
   }

   public function getNombreTipo() {
       return $this->nombreTipo;
   }

   public function setIdTipo($idTipo) {
       $this->idTipo = $idTipo;
   }

   public function setNombreTipo($nombreTipo) {
       $this->nombreTipo = $nombreTipo;
   }
}
?>