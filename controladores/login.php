<?php
    session_start();
   

    require_once('../DAO/ControlEmpleadoDAO.php');    
   
    require_once('../Entities/ControlEmpleado.php');    
    
    $usuario = $_POST['txtUsuario'];
    $pass = $_POST['txtPass'];
    $tipoUsuario = $_POST['txtTipoUsuario'];
    $isLogin = "0";

    $controles = ControlEmpleadoDAO::readAll();
    foreach($controles as $control){
        if($control->getUsuario()==$usuario && $control->getClave()==$pass && $control->getIdTipo()==$tipoUsuario){           
            $isLogin = "1";
            switch ($tipoUsuario) {
                case 1:
                   // echo "Vendedor";
                    $_SESSION['login']= serialize($control);      
                    header('Location: ../local/index.php');                        
                    break;
                case 2:
                   // echo "Cajero";
                    $_SESSION['login']= serialize($control);
                    header('Location: ../cajero/index.php');   
                    break;
                case 3:
                   // echo "administrador";
                    $_SESSION['login']= serialize($control);
                    header('Location: ../administrador/administrar.php');   
                    break;
                case 4:
                    // echo "administrador";
                     $_SESSION['login']= serialize($control);
                     header('Location: ../despacho/administrar.php');   
                     break;
            }            
        }
    }

    if($isLogin=="0"){        
        $_SESSION['mensaje']= "Usuario Incorrecto";
        header('Location: ../ingresar.php');   
    }
    

?>