<?php
    
    session_start();
    $codigo = 0;
    if(isset($_SESSION['BOLETAID'])){
        $codigo = $_SESSION['BOLETA'];
    }else{
        header('Location: ../local/index.php');
    }

?>




<img src="barra.php?text="<?php echo $codigo ?>"&size=40&codetype=Code39&print=true" />
