<?php
    session_start();
   
    require_once('../DAO/EmpleadoDAO.php');    
    require_once('../DAO/ControlEmpleadoDAO.php');    


    $rut = $_POST['txtRut'];
    $opcion = $_POST['opcion'];
    $isEncontrado = 0;
    $empleados = EmpleadoDAO::readAll();
    $activo= 0;

    if($opcion=="buscar"){
        foreach($empleados as $e){
            if($e->getRutEmpleado()==$rut){           
                //Busca Empleado
                $isEncontrado = 1;
                $_SESSION['persona']= serialize($e);
                $_SESSION['estado']="Encontrado";    
                header('Location: ../administrador/admin/empleado.php');                        
                break;   
            }
        }
    
        if($isEncontrado=="0"){        
            $_SESSION['persona']= null;   
            $_SESSION['rut']=$rut;         
            $_SESSION['estado']="No Encontrado";     
            header('Location: ../administrador/admin/empleado.php');                        
        }
    }
    if($opcion=="modificar"){
        

        $nombres = $_POST['txtNombres'];
        $apellidos = $_POST['txtApellidos'];
        $idTipoU = $_POST['txtTipoUsuario'];
        $fechaNac = $_POST['txtFechaNac'];
        $idComuna = $_POST['txtComuna'];
        $telefono = $_POST['txtTelefono'];
        $correo = $_POST['txtCorreo'];
        foreach($empleados as $e){
            if($e->getRutEmpleado()==$rut){               
                
                $persona = new Empleado($e->getIdEmpleado(),$rut,$nombres,$apellidos,$fechaNac,$telefono,$idComuna,$correo,$activo); 
                $x = EmpleadoDAO::sqlUpdate($persona);  
                $controles = ControlEmpleadoDAO::readAll();
                foreach($controles as $c){
                    if($c->getIdEmpleado()==$persona->getIdEmpleado()){
                        $c->setIdTipo($idTipoU);
                        $x = ControlEmpleadoDAO::sqlUpdate($c);                        
                        break;
                    }   
                }              
                $_SESSION['persona']= serialize($persona);
                $_SESSION['estado']= "Modificado";               
                header('Location: ../administrador/admin/empleado.php');                        
                break;   
            }
        }
    }
    if($opcion=="eliminar"){
        $eliminado = 0;
        $controles = ControlEmpleadoDAO::readAll();
        foreach($empleados as $e){
            if($e->getRutEmpleado()==$rut){               
                
                $persona = new Empleado($e->getIdEmpleado(),"","","","","","","",""); 
                $x = EmpleadoDAO::sqlDelete($persona);
                foreach($controles as $c){
                    if($c->getIdEmpleado()==$persona->getIdEmpleado()){
                        $x = ControlEmpleadoDAO::sqlDelete($c);                        
                        $eliminado = 1;
                        break;
                    }   
                }
                break;   
            }
        }
        if($eliminado==1){            
            $_SESSION['persona']= null;     
            $_SESSION['estado']="Eliminado";               
            header('Location: ../administrador/admin/empleado.php');     
        }
    }

   
    if($opcion=="agregar"){
        

        $nombres = $_POST['txtNombres'];
        $apellidos = $_POST['txtApellidos'];
        $idTipoU = $_POST['txtTipoUsuario'];
        $fechaNac = $_POST['txtFechaNac'];
        $idComuna = $_POST['txtComuna'];
        $telefono = $_POST['txtTelefono'];
        $correo = $_POST['txtCorreo'];
        foreach($empleados as $e){
            if($e->getRutEmpleado()==$rut){               
                $isEncontrado=1;                                  
                break;   
            }
        }
        if($isEncontrado==0){
            //no se encontro
            $pAnterior = EmpleadoDAO::lastValue();
            $idNueva= $pAnterior->getIdEmpleado() + 1;
            $persona = new Empleado($idNueva,$rut,$nombres,$apellidos,$fechaNac,$telefono,$idComuna,$correo,1); 
          
            $x = EmpleadoDAO::sqlInsert($persona);
            $cAnterior = ControlEmpleadoDAO::lastValue();
            $idNuevaC= $cAnterior->getIdControlE() + 1;
            
            echo "  -  " . $idNuevaC;
            $controlE = new ControlEmpleado($idNuevaC,$idNueva,$rut,$rut,$idTipoU,1);
            $x = ControlEmpleadoDAO::sqlInsert($controlE);
            
          
            $isEncontrado = 1;
            $_SESSION['persona']= serialize($persona);
            $_SESSION['estado']="Creado";
            header('Location: ../administrador/admin/empleado.php');   
        }
    }

?>