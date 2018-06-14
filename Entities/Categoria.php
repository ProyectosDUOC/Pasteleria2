<?php
class Categoria {
    /*CREATE TABLE categoria (
    id_cate       INTEGER NOT NULL,
    nombre_cate   VARCHAR(40) NOT NULL,
    activo        INTEGER NOT NULL
    );   */
    
    private $idCate;
    private $nombreCate;
    private $activo;
    
    public function __construct($idCate, $nombreCate, $activo) {
        $this->idCate = $idCate;
        $this->nombreCate = $nombreCate;
        $this->activo = $activo;
    }
    public function getIdCate() {
        return $this->idCate;
    }

    public function getNombreCate() {
        return $this->nombreCate;
    }

    public function getActivo() {
        return $this->activo;
    }

    public function setIdCate($idCate) {
        $this->idCate = $idCate;
    }

    public function setNombreCate($nombreCate) {
        $this->nombreCate = $nombreCate;
    }

    public function setActivo($activo) {
        $this->activo = $activo;
    }

}

?>
