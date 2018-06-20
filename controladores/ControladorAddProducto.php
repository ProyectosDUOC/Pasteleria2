<?php
    session_start();
    if (!isset($rootDir)) $rootDir = $_SERVER['DOCUMENT_ROOT'];
    
    require_once($rootDir . '/DAO/ProductoDAO.php'); 
    require_once($rootDir . '/Entities/Producto.php'); 
    require_once($rootDir . '/DAO/CategoriaDAO.php');    
    require_once($rootDir . '/DAO/ProductoPrecioDAO.php');
    
    $opcion = $_POST['opcion'];

    if($opcion=="Agregar"){
        
        $nombreProducto = "";
        $img = "";
        $tipoUsuario = "";
        if(isset($_POST['txtNombreP']) && isset($_POST['txtImg']) && isset($_POST['txtTipoUsuario'])){

            $nombreProducto = $_POST['txtNombreP'];
            $img = $_POST['txtImg'];
            $tipoUsuario = $_POST['txtTipoUsuario'];

        }

        if(strlen($nombreProducto)>0 && strlen($img)>0 && strlen($tipoUsuario)>0 ){
            $productoA = ProductoDAO::lastValue();
            $idNuevo = $productoA->getIdProducto() + 1;
            $codPro = $idNuevo . "3" . $productoA->getIdProducto()-5;  
            $producto = new Producto($idNuevo, $codPro, $nombreProducto, $img,"", 1, $tipoUsuario);
            $x = ProductoDAO::sqlInsert($producto);    
            
            $_SESSION['mensaje']="Se ha agregado Producto";
            header('Location: ../administrador/admin/producto.php');    
        }      
    }

    if($opcion=="AgregarPrecio"){

        if(isset($_POST['txtDescripcionP']) && isset($_POST['txtPrecio'])){
            $desc = $_POST['txtDescripcionP'];
            $precio = $_POST['txtPrecio'];
            $idP = $_SESSION['idP'];

            $productoPrecioAnterior = ProductoPrecioDAO::lastValue();
            $idn = $productoPrecioAnterior->getIdProductoP() + 1;
            echo $idn;
            $productoPrecio = new ProductoPrecio($idn,$idP,$desc,$precio);
            $x = ProductoPrecioDAO::sqlInsert($productoPrecio);
            $_SESSION['mensaje']="Se ha creado";        
            header('Location: ../administrador/admin/editarProducto.php');   
            
        }
    }

    
    $op = substr($opcion,0,1); 
    if($op=="X"){        
        $id = substr($opcion,1);
        $producto = new ProductoPrecio($id,"","","");
        $x = ProductoPrecioDAO::sqlDelete($producto);
        $_SESSION['mensaje']="Eliminado";        
        header('Location: ../administrador/admin/editarProducto.php');   
    }

?>