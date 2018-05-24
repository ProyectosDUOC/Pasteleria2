<?php

    require_once('consultas.php');

    $mensaje = null;
    $id = $_POST['idProducto'];
    $nombre = $_POST['nombreProducto'];
    $tamaño = $_POST['tamaño'];
    $imagen = $_POST['nombreProducto'];
    $idcategoria = $_POST['categoria'];
    $precio = $_POST['Precio'];
   
    if(strlen($id)>0 && strlen($nombre)>0 && strlen($tamaño)>0 && strlen($imagen)>0 && strlen($idcategoria)>0 && strlen($precio)>0){
        $consultas = new ConsultasC();
        $mensaje = $consultas->agregarProducto($id,$nombre,$tamaño,$imagen,$idcategoria,$precio);
    }else{
        echo "Completar todos los campos";
    }

    return $mensaje;

?>