<?php
    session_start();
    if (!isset($rootDir)) $rootDir = $_SERVER['DOCUMENT_ROOT'];
    
    require_once($rootDir . '/DAO/ProductoDAO.php'); 
    require_once($rootDir . '/DAO/CategoriaDAO.php');    
    require_once($rootDir . '/DAO/ProductoPrecioDAO.php');
    
    $opcion = $_POST['opcion'];

    if($opcion=='variedades'){
        $idProd = $_POST['idproducto'];
        $variedades = ProductoPrecioDAO::idRealAll($idProd);
        foreach ($variedades as $prodPrecio) {
            echo "<option value='" . $prodPrecio->getIdProductoP() . "'>";
            echo $prodPrecio->getDescripcion();
            echo "</option>";
        }
    }

?> 