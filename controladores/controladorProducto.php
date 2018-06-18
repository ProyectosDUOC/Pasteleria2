<?php
    session_start();
   
    require_once('../DAO/ProductoDAO.php');    
    require_once('../DAO/CategoriaDAO.php');    

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
        header('Location: ../administrador/admin/producto.php');    
    }
    if($op=="L"){
        $id = substr($opcion,1);

        $_SESSION['listar']=$id;      
        header('Location: ../administrador/admin/producto.php');    
    }
    if($opcion=="Agregar"){
        $_SESSION['agregar']="1";

    }
?>