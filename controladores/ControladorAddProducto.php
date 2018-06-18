<?php
    session_start();
    if (!isset($rootDir)) $rootDir = $_SERVER['DOCUMENT_ROOT'];
    
    require_once($rootDir . '/DAO/ProductoDAO.php'); 
    require_once($rootDir . '/Entities/Producto.php'); 
    require_once($rootDir . '/DAO/CategoriaDAO.php');    
    require_once($rootDir . '/DAO/ProductoPrecioDAO.php');
    
    $opcion = $_POST['opcion'];

    if($opcion="Agregar"){
        $nombreProducto = $_POST['txtNombreP'];
        $img = $_POST['txtImg'];
        $tipoUsuario = $_POST['txtTipoUsuario'];

        if(strlen($nombreProducto)>0 && strlen($img)>0 && strlen($tipoUsuario)>0 ){
            $productoA = ProductoDAO::lastValue();
            $idNuevo = $productoA->getIdProducto() + 1;
            $codPro = $idNuevo . "3" . $productoA->getIdProducto()-5;  
            $producto = new Producto($idNuevo, $codPro, $nombreProducto, $img,"", 1, $tipoUsuario);
            $x = ProductoDAO::sqlInsert($producto);    
            
        echo "Agregado " . $codPro;
        }      
        
        echo "error  ";
    }

?>