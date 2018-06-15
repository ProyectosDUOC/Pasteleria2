<?php
    session_start();
   

    require_once('../DAO/ControlEmpleadoDAO.php');    
   
    require_once('../Entities/ControlEmpleado.php');    
    
    $usuario = $_POST['txtUsuario'];
    $pass = $_POST['txtPass'];
    $tipoUsuario = $_POST['txtTipoUsuario'];

    $controles = ControlEmpleadoDAO::readAll();
    foreach($controles as $control){
        if($control->getUsuario()==$usuario && $control->getClave()==$pass && $control->getIdTipo()==$tipoUsuario){           
            switch ($tipoUsuario) {
                case 1:
                    echo "Vendedor";
                    $_SESSION['login']= serialize($control);
                    header('Location: ../local/index.php');                        
                    break;
                case 2:
                    echo "Cajero";
                    break;
                case 3:
                    echo "administrador";
                    break;
            }

            
        }
    }
    

?>