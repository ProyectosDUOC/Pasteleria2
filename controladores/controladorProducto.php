<?php
    session_start();
    if (!isset($rootDir)) $rootDir = $_SERVER['DOCUMENT_ROOT'];
    
    require_once($rootDir . '/DAO/ProductoDAO.php'); 
    require_once($rootDir . '/DAO/CategoriaDAO.php');    
    require_once($rootDir . '/DAO/ProductoPrecioDAO.php');
    
    $opcion = $_POST['opcion'];

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
    if($op=="C"){
        $id = substr($opcion,1);
        
        $_SESSION['idCate']=$id;           
        $_SESSION['mensaje']=null;    
        header('Location: ../administrador/admin/producto.php');    
    }
    if($op=="L"){
        $id = substr($opcion,1);

        $_SESSION['listar']=$id;    
        $_SESSION['mensaje']=null;   
        header('Location: ../administrador/admin/producto.php');    
    }
    if($op=="E"){
        $id = substr($opcion,1);
        
        $_SESSION['listar']=$id;      
        $_SESSION['mensaje']="Eliminado";      
        header('Location: ../administrador/admin/producto.php');    
    }
    if($op=="M"){
        $id = substr($opcion,1);
        
        $_SESSION['listar']=$id;      
        $_SESSION['mensaje']="Modificar";      
        header('Location: ../administrador/admin/producto.php');    
    }
    if($opcion=="Agregar"){
        $_SESSION['agregar']="1";

    }
?>