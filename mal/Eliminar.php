<?php

require_once('conexion.php');
require_once('consultas.php');

if(isset($_GET['id_producto'])){
    $id_producto = $_GET['id_producto'];
    $consultas = new ConsultasC();
    $mensaje = $consultas->eliminarProducto($id_producto);
    echo $mensaje;
    echo "<div><a href='verProducto.php'>Volver</a><div>";
}
?>