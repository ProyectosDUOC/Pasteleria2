<?php
    session_start();
    ?>
<?php
    $usuario = $_POST['usuario'];
    $pass = $_POST['pass'];

    if($usuario=="vendedor"){
        header('Location: ../local/index.html');
        
    }    
    if($usuario=="2"){
        echo "Hola Vendedor";
    }    
    if($usuario=="cajero"){
        header('Location: ../admin/index.html');
    }

?>