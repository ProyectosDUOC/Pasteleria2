<?php 

session_start();
   
if (!isset($rootDir)) {
    $rootDir = $_SERVER['DOCUMENT_ROOT'];
}

//Agregamos desde BD.PHPy la Entitie Actor
// desde el Path raiz ==> $rootDir
require_once ($rootDir . "/DAO/BoletaDAO.php");
require_once ($rootDir . "/DAO/PedidoLocalDAO.php");


$opcion = $_POST['opcion'];
$id = $_POST['id'];

if($opcion=="Buscar"){
    $letra = substr($id,0,1); 
    $id = substr($id,1);
    if($letra=="B" || $letra=="b"){
        $boleta = BoletaDAO::sqlSelect($id);
        if($boleta->getIdEmpleado()>0){ //boleta existe
           // $_SESSION['id']=$id;    

           if($boleta->getIdFormaPago()!=0){
                $_SESSION['mensaje']="Boleta Ya Cobrada";   
                header('Location: ../cajero/index.php');   
           }else{
                $_SESSION['mensaje']=null;
                $_SESSION['id']="b" . $id;
                header('Location: ../cajero/boucher.php');   
           }
        }else{ //No existe  
            $_SESSION['mensaje']="No se econtro Boleta";   
            header('Location: ../cajero/index.php');   
        }         
    }
    if($letra=="P"|| $letra=="p"){
        $bol = PedidoLocalDAO::sqlSelect($id);
        if($bol->getIdCliente()>0){ //boleta existe
            $_SESSION['idC']=$id;    
            
            $_SESSION['mensaje']=null;   
            header('Location: ../cajero/index.php');   
        }else{ //No existe  
            $_SESSION['mensaje']="No existe Boleta";   
            header('Location: ../cajero/index.php');   
        }
    }
    if($letra!="P" && $letra!="p" && $letra!="B" && $letra!="b" ){
        $_SESSION['mensaje']="No existe Boleta";   
        header('Location: ../cajero/index.php');   
    }
}






?>