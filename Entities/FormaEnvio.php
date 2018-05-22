<?php
class FormaEnvio {
    /* CREATE TABLE forma_envio (
    id_forma_envio   INTEGER NOT NULL,
    nombre_envio     VARCHAR(30) NOT NULL
    ); */
    
    private $idFormaEnvio;
    private $nombreEnvio;
    
    public function __construct($idFormaEnvio, $nombreEnvio) {
        $this->idFormaEnvio = $idFormaEnvio;
        $this->nombreEnvio = $nombreEnvio;
    }

    public function getIdFormaEnvio() {
        return $this->idFormaEnvio;
    }

    public function getNombreEnvio() {
        return $this->nombreEnvio;
    }

    public function setIdFormaEnvio($idFormaEnvio) {
        $this->idFormaEnvio = $idFormaEnvio;
    }

    public function setNombreEnvio($nombreEnvio) {
        $this->nombreEnvio = $nombreEnvio;
    }
    
}
