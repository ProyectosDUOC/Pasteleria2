<?php
    session_start();
    if (!isset($rootDir)) $rootDir = $_SERVER['DOCUMENT_ROOT'];
    
    require_once($rootDir . '/DAO/ProductoDAO.php'); 
    require_once($rootDir . '/DAO/CategoriaDAO.php');    
    require_once($rootDir . '/DAO/ProductoPrecioDAO.php');
    
    $opcion = $_POST['opcion'];
    $_SESSION['idP']=null;
   // $op = "A12";
   // echo "Ingresa"  . $op;                                
   // echo"<br>";
   // $char = substr($op,0,1);
   // echo "Obtengo " . $char;
   // $op= substr($op,1);
   // echo"<br>";
   // echo "ID=" . $op;

    $op = substr($opcion,0,1); 
    //Categoria Ingresar
    if($opcion=="Agregar"){
        $_SESSION['estado']=1;         
        header('Location: ../administrador/admin/editarProducto.php');    
    }
    if($op=="L"){
        $id = substr($opcion,1);

        $_SESSION['listar']=$id;    
        $_SESSION['mensaje']=null;   
        header('Location: ../administrador/admin/producto.php');    
    }
    if($op=="E"){
        $id = substr($opcion,1);
         
        $_SESSION['mensaje']="Eliminado";  
        $producto = ProductoDAO::sqlSelect($id);
        $precioPro = ProductoPrecioDAO::readAll();
        foreach($precioPro as $c){
            if($c->getIdProducto() == $id ){
                $x = ProductoPrecioDAO::sqlDelete($c);
            }
        }
        $x = ProductoDAO::sqlDelete($producto);
        
        $_SESSION['mensaje']="Eliminado";   
        header('Location: ../administrador/admin/producto.php');    
    }
    if($op=="M"){
        $id = substr($opcion,1);
        $nombre = $_POST['txtNombreProducto'];
        $producto = ProductoDAO::sqlSelect($id);
        $producto->setNombreProducto($nombre);
        $x = ProductoDAO::sqlUpdate($producto);
        $_SESSION['mensaje']="Modificado  numero " . $nombre .   " - " . $x;      
        header('Location: ../administrador/admin/producto.php');    
    }
    if($op=="Z"){
        $id = substr($opcion,1);
        $_SESSION['idP']=$id;
        $_SESSION['estado']=3;         
        header('Location: ../administrador/admin/editarProducto.php');   
    }
    if($opcion=="AgregarCategoria"){
        $nombre = $_POST['txtNombreCategoria'];
        $econtrado = 0;
        $categoria = CategoriaDAO::sqlSelectAll();

        foreach($categoria as $c){
            if($c->getNombreCate()==$nombre){                
                $_SESSION['mensaje']="Nombre ya en uso"; 
                $econtrado = 1;  
                break;
            }
        }
        if($econtrado==0){            
            $_SESSION['mensaje']="Categoria Agregada";

            $categoria= CategoriaDAO::lastValue();
            $idNueva = $categoria->getIdCate() + 1;
            $categoria= new Categoria($idNueva, $nombre, 1);
            $x = CategoriaDAO::sqlInsert($categoria);
        }
        header('Location: ../administrador/admin/producto.php');   

    }
?>