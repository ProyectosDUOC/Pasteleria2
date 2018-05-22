<?php
class Producto {
    /*CREATE TABLE producto (
    id_producto       INTEGER NOT NULL,
    cod_producto      INTEGER NOT NULL,
    nombre_producto   VARCHAR(50) NOT NULL,
    imagen            VARCHAR(60),
    activo            INTEGER NOT NULL,
    id_cate           INTEGER NOT NULL
    );*/
    
    private $idProducto;
    private $codProducto;
    private $nombreProducto;
    private $imagen;
    private $activo;
    private $idCate;
    
    public function __construct($idProducto, $codProducto, $nombreProducto, $imagen, $activo, $idCate) {
        $this->idProducto = $idProducto;
        $this->codProducto = $codProducto;
        $this->nombreProducto = $nombreProducto;
        $this->imagen = $imagen;
        $this->activo = $activo;
        $this->idCate = $idCate;
    }
    
    public function getIdProducto() {
        return $this->idProducto;
    }

    public function getCodProducto() {
        return $this->codProducto;
    }

    public function getNombreProducto() {
        return $this->nombreProducto;
    }

    public function getImagen() {
        return $this->imagen;
    }

    public function getActivo() {
        return $this->activo;
    }

    public function getIdCate() {
        return $this->idCate;
    }

    public function setIdProducto($idProducto) {
        $this->idProducto = $idProducto;
    }

    public function setCodProducto($codProducto) {
        $this->codProducto = $codProducto;
    }

    public function setNombreProducto($nombreProducto) {
        $this->nombreProducto = $nombreProducto;
    }

    public function setImagen($imagen) {
        $this->imagen = $imagen;
    }

    public function setActivo($activo) {
        $this->activo = $activo;
    }

    public function setIdCate($idCate) {
        $this->idCate = $idCate;
    }

}
