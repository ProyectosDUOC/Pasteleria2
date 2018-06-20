<?php

session_start();   

require_once('../DAO/ProductoDAO.php');  
require_once('../DAO/ProductoPrecioDAO.php');
require_once('../DAO/CategoriaDAO.php');

require_once('../DAO/BoletaDAO.php');
require_once('../DAO/DetalleBoletaDAO.php');

$carrito = array();

if(isset($_SESSION['carrito'])){

    $carrito = $_SESSION['carrito'];

    $carrito[] = array("idprodp" => $_POST['variedad'], "cant" => $_POST['cantidad']);
} 

$num = 1;
$total=0;
foreach ($carrito as $item) {
    $prodPrecio = ProductoPrecioDAO::sqlSelect($item['idprodp']);
    $prod = ProductoDAO::sqlSelect($prodPrecio->getIdProducto());
    $precioUnit = $prodPrecio->getPrecio();
    echo "<tr>";
    echo "<td>" . $num++ . "</td>";
    echo "<td>" . $prod->getNombreProducto() . "</td>";
    echo "<td>" . $prodPrecio->getDescripcion() . "</td>";
    echo "<td>" . $item['cant'] . "</td>";
    echo "<td>" . $precioUnit . "</td>";
    echo "<td>" . $precioUnit * $item['cant'] . "</td>";
    echo "</tr>";

    $total += $item['precio'];
}
?>