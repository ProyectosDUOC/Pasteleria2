<?php  session_start();

if(isset($_SESSION['empleado'])){
    header('Location: contendio.php');

}else{
    header('Location: ../ingresa.php');
}


?>