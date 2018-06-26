<?php 
session_start();
if (!isset($rootDir)) $rootDir = $_SERVER['DOCUMENT_ROOT'];

require_once($rootDir . '/DAO/ProductoDAO.php'); 
require_once($rootDir . '/Entities/Producto.php'); 
require_once($rootDir . '/DAO/CategoriaDAO.php');    
require_once($rootDir . '/DAO/ProductoPrecioDAO.php');

require_once($rootDir . '/DAO/BoletaDAO.php');



$opcion = $_POST['opcion'];
$letra = $_POST['letra'];
$id = $_POST['id'];
$forma = $_POST['txtTipoPago'];
$boleta=null;
if($opcion=="Pagar"){
    if ($letra=="b"){
        $boleta = BoletaDAO::sqlSelect($id);

        $boleta->setIdFormaPago($forma);
        $x = BoletaDAO::sqlUpdate($boleta);
        $_SESSION['mensaje']="<spam class='text-success'>Imprimiendo Boleta</spam>";   
        header('Location: ../cajero/index.php');   
    }
}

?>