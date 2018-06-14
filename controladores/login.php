<?php

    session_destroy();
    session_start();
   
    $_SESSION['login']= 'no';

    require_once('../DAO/ControlEmpleadoDAO.php');
    $usuario = $_POST['txtUsuario'];
    $pass = $_POST['txtPass'];
    $tipoUsuario = $_POST['txtTipoUsuario'];

    $controles = ControlEmpleadoDAO::readAll();
    foreach($controles as $control){
        if($control['usuario']==$usuario && $control['clave']==$pass){
            if($control['id_tipo']==$tipoUsuario){
                switch ($tipoUsuario) {
                    case 1:
                        echo "Vendedor";
                        $_SESSION['login']= $control;
                        header('Location: ../local/index.php');                        
                        break;
                    case 2:
                        echo "Cajero";
                        break;
                    case 3:
                        echo "administrador";
                        break;
                }
            }else{
                echo "error Tipo de datos";
            }

            
        }else{
            
        }

    }
    

?>