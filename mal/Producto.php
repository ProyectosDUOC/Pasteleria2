<?php

class Producto{

private $id;
private $nombre;
private $tamaño;
private $imagen;
private $idcategoria;
private $precio;



public function getId(){
    return $this->id;
}

public function setId($id){
    $this->id = $id;
}

public function getNombre(){
    return $this->nombre;
}

public function setNombre($nombre){
    $this->nombre = $nombre;
}


public function getTamaño(){
    return $this->tamaño;
}

public function setTamaño($tamaño){
    $this->tamaño = $tamaño;
}

public function getImagen(){
    return $this->imagen;
}

public function setImagen($imagen){
    $this->imagen = $imagen;
}

public function getIdCategoria(){
    return $this->idCategoria;
}

public function setIdCategoria($idcategoria){
    $this->idCategoria = $idcategoria;
}

public function getPrecio(){
    return $this->precio;
}

public function setPrecio($precio){
    $this->precio = $precio;
}


public function __construct($id=0, $nombre=null,$tamaño=null, $imagen=null,$idCategoria=0,$precio=0)
{
    $this->setId($id);
    $this->setNombre($nombre);
    $this->setTamaño($tamaño);
    $this->setImagen($imagen);
    $this->setIdCategoria($idCategoria);
    $this->setPrecio($precio);
    
}	   

}	 
$prod = new Producto();
    var_dump($prod);







?>